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
use App\Team;

class ApiPostController extends Controller
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
    
    
    public function storePost(Request $request)
    {
        $user = Auth::user(); // OR: Auth::user() if already authenticated
    
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Unauthorized'], 401);
        }
    
        $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }
    
        $post = Post::create([
            'user_id' => $user->id,
            'body' => $request->body,
            'image' => $imagePath,
            'likes_count' => 0,
            'comments_count' => 0,
            'is_flagged' => false,
            'status' => 'active',
        ]);
    
        preg_match_all('/#([a-zA-Z0-9\s]+)/', $request->body, $matches);
        $teamNames = $matches[1];
        $teamIds = Team::whereIn('name', $teamNames)->pluck('id');
        $post->teams()->sync($teamIds);
    
        return response()->json([
            'status' => true,
            'message' => 'Post created successfully',
            'data' => $post,
        ], 201);
    }


   

    



   

}
