<?php

namespace App\Http\Controllers\Website;

use App\Models\Service;
use App\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\Product\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use App\User;
use Cart;
use Auth;
use DB;
use App\Utilities\Overrider;
use Validator;
use Newsletter;
use App\Post;
use App\PostLike;
use App\Team;

class PostController extends Controller
{
    private $theme;

    public function __construct()
    {
        $this->theme = env('ACTIVE_THEME', 'mocksurl');

        if (env('APP_INSTALLED', true) == true) {
            $this->middleware(function ($request, $next) {

                if (isset($_GET['language'])) {
                    session(['language' => $_GET['language']]);
                    return back();
                }

                if (isset($_GET['currency'])) {
                    session(['currency' => $_GET['currency']]); //This is using for frontend
                    //\Cache::put('currency', $_GET['currency']);

                    session(['display_currency_rate' => '']);
                    //\Cache::forget('display_currency_rate');

                    return back();
                }

                return $next($request);
            });

            date_default_timezone_set(get_option('timezone', 'Asia/Dhaka'));
        }
    }
    
    
    public function store(Request $request)
    {
    $request->validate([
        'body' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    // Save image if exists
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    // Create Post
    $post = Post::create([
        'user_id' => auth()->id(),
        'body' => $request->body,
        'image' => $imagePath,
        'likes_count' => 0,
        'comments_count' => 0,
        'is_flagged' => false,
        'status' => 'active',
    ]);

    // Extract hashtags
    preg_match_all('/#([a-zA-Z0-9\-]+)/', $request->body, $matches);
    $teamNames = $matches[1];

    // Match with existing teams (case-insensitive)
    $teamIds = Team::whereIn('name', $teamNames)->pluck('id');
    $post->teams()->sync($teamIds);

    return redirect()->back()->with('success', 'Post created successfully!');
}


    public function admin_index()
    {
        $posts = Post::with('teams')->latest()->get();
        return view("backend.post.posts",compact('posts'));
    }

    public function index()
    {
        $posts = Post::with('teams')
            ->withCount('likes') // <-- likes_count bhi chahiye
            ->latest()
            ->get()
            ->map(function ($post) {
                $post->isLikedByUser = $post->likes()
                    ->where('user_id', auth()->id())
                    ->exists();
                return $post;
            });
    
        return view("theme.$this->theme.post", compact('posts'));
    }

    
    public function destroy(Post $post)
    {
        // // Optional: check if user is admin (authorization)
        // if (auth()->user()->role !== 'admin') {
        //     abort(403);
        // }
    
        // Delete post image from storage (if exists)
        if ($post->image) {
            \Storage::disk('public')->delete($post->image);
        }
    
        $post->delete();
    
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }



    public function toggleLike(Post $post)
{
    $user = auth()->user();

    $existingLike = $post->likes()->where('user_id', $user->id)->first();

    if ($existingLike) {
        $existingLike->delete();
        $post->decrement('likes_count');
        $post->refresh();
        \Log::info('After decrement:', ['likes_count' => $post->likes_count]);
        if ($post->likes_count < 0) {
            $post->update(['likes_count' => 0]);
        }
        $liked = false;
    } else {
        $post->likes()->create([
            'user_id' => $user->id
        ]);
        $post->increment('likes_count');
        $post->refresh();
        \Log::info('After increment:', ['likes_count' => $post->likes_count]);
        $liked = true;
    }

    return response()->json([
        'success' => true,
        'liked' => $liked,
        'likes_count' => $post->likes_count,
    ]);
}



    // public function buffalo_bills()
    // {
    //     $posts = Post::with('teams')
    //         ->withCount('likes') // <-- likes_count bhi chahiye
    //         ->latest()
    //         ->get()
    //         ->map(function ($post) {
    //             $post->isLikedByUser = $post->likes()
    //                 ->where('user_id', auth()->id())
    //                 ->exists();
    //             return $post;
    //         });
    
    //     return view("theme.$this->theme.buffalo-bills", compact('posts'));
    // }


   

}
