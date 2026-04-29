<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\CustomerAddress;
use App\Utilities\Overrider;
use App\Order;
use Validator;
use Hash;
use Auth;


class ApiCustomerController extends Controller
{
    private $theme;

    public function __construct()
    {
        $this->theme = env('ACTIVE_THEME','mocksurl');        
        date_default_timezone_set(get_option('timezone','Asia/Dhaka'));     
    }

    /**
     * Show the Customer Login Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
	
	/**
     * Show the Customer Register Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signUp(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }
    
        // Create User
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->user_type = 'customer';
        $user->status = 1;
        $user->profile_picture = 'default.png';
        $user->email_verified_at = get_option('email_verification') == 'disabled' ? now() : null;
        $user->favorite_teams = is_array($request->favorite_teams) ? json_encode($request->favorite_teams) : null;
        $user->password = Hash::make($request->password);
        $user->save();
    
        // Trigger Email Verified Event (optional for API)
        event(new \Illuminate\Auth\Events\Verified($user));
    
        // Response
        return response()->json([
            'status' => true,
            'message' => 'Your account has been created successfully',
            'data' => $user
        ], 201);
}



    public function api_sign_in(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }
    
        // Attempt to log in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
    
            $user = Auth::user();
    
            // Check email verification if required
            if (get_option('email_verification') == 'enabled' && $user->email_verified_at == null) {
                Overrider::load("Settings");
                $user->sendEmailVerificationNotification();
    
                return response()->json([
                    'success' => true,
                    'message' => 'Email verification required. Verification email sent.',
                    'email_verified' => false,
                    'user' => $user,
                ]);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
                'email_verified' => true,
                'user' => $user,
                // optionally add token if using Sanctum or Passport
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials or account not active.',
            ], 401);
        }
    }

    



}
