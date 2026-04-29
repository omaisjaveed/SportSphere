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
use App\Message;
use App\ChatRoom;
use Cart;
use Auth;
use DB;
use App\Utilities\Overrider;
use Validator;
use Newsletter;

class MessageController extends Controller
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
    
    
    
   public function show($id) {
        $chatRoom = ChatRoom::with('user')->findOrFail($id);
        $messages = Message::with('user')
            ->where('chat_room_id', $id)
            ->orderBy('created_at')
            ->get();
    
        return view("theme.$this->theme.chat_rooms_show", compact('chatRoom', 'messages'));
    }
    
   public function store(Request $request, $id) {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);
    
        $message = Message::create([
            'chat_room_id' => $id,
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);
    
        // Yeh line zaroor lagao taake $message mein user ka data bhi load ho jaye
        $message->load('user');
    
        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'data' => $message,
            ]);
        }
    
        return redirect()->route('chat.rooms.show', $id);
    }





public function poll($chatRoomId)
{
    $messages = Message::with('user')
        ->where('chat_room_id', $chatRoomId)
        ->latest()
        ->take(20)
        ->get()
        ->reverse()
        ->values();

    return response()->json([
        'status' => 'success',
        'data' => $messages,
    ]);
}





    


  
}
