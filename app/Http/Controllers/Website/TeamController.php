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
use Illuminate\Support\Str;


class TeamController extends Controller
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
    
    
    public function suggest(Request $request)
    {
        $query = $request->get('q');
        $teams = Team::where('name', 'LIKE', "%$query%")->limit(5)->get(['name']);
        return response()->json($teams);
    }
    
    
    public function showPosts($slug)
    {
        $team = Team::where('slug', $slug)->firstOrFail();
        
        $posts = $team->posts()->with('teams')->latest()->get();
        
        // $posts = Post::with('teams')
        //     ->withCount('likes') // <-- likes_count bhi chahiye
        //     ->latest()
        //     ->get()
        //     ->map(function ($post) {
        //         $post->isLikedByUser = $post->likes()
        //             ->where('user_id', auth()->id())
        //             ->exists();
        //         return $post;
        //     });
    
        return view("theme.$this->theme.team-posts", compact('team', 'posts'));
    }
    
    
    public function create()
    {
        return view("theme.$this->theme.team-create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:teams,name',
            'league' => 'required',
        ]);

        Team::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'league' => $request->league,
        ]);

        // return redirect()->back()->with('success', 'Team added successfully!');
         return redirect()->route('teams.index')->with('success', 'Team added successfully!');
    }



    public function index()
    {
        $teams = Team::all(); // Fetch all teams
        return view("theme.$this->theme.teams", compact('teams'));
    }

     public function buffalo_bills()
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
    
        return view("theme.$this->theme.buffalo-bills", compact('posts'));
    }
   

}
