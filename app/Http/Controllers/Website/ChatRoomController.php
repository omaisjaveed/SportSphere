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
use App\ChatRoom;
use Cart;
use Auth;
use DB;
use App\Utilities\Overrider;
use Validator;
use Newsletter;

class ChatRoomController extends Controller
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


    public function index()
    {
        $chatRooms = ChatRoom::latest()->get();
        // return view('chat_rooms.index', compact('chatRooms'));
        return view("theme.$this->theme.chat_rooms", compact('chatRooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        if (!auth()->user()->is_premium) {
            return back()->with('error', 'Only premium users can create chat rooms.');
        }

        ChatRoom::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('chat.rooms.index')->with('success', 'Chat room created!');
    }
    
    
    
    public function show($id)
    {
        $chatRoom = ChatRoom::with('messages.user')->findOrFail($id);
        $messages = $chatRoom->messages;
    
         return view("theme.$this->theme.chat_rooms_show",compact('chatRoom', 'messages'));
    }
    
    
  public function destroy($id)
    {
        $room = ChatRoom::findOrFail($id);
    
        if ($room->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Unauthorized');
        }
    
        $room->forceDelete(); // Permanent delete
    
        return redirect()->back()->with('success', 'Chat room permanently deleted.');
    }







  
}
