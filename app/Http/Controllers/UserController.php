<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    function UserRegistration(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|string|email|max:50|unique:users,email',
                'mobile' => 'required|string|max:50',
                'password' => 'required|string|min:3'
            ]);
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => Hash::make($request->input('password'))
            ]);
            return response()->json(['status' => 'success', 'message' => 'User Registration Successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function UserLogin(Request $request): JsonResponse
    {
        try {
            $request->validate([
                // 'email' => 'required|string|email|max:50',
                'email' => 'string|email|max:50',
                'password' => 'required|string|min:3'
            ]);

            // login by email
            // $user = User::where('email', $request->input('email'))->first();

            // login by email and phone
            $user = User::where('email', $request->input('email'))->orWhere('mobile', $request->input('mobile'))->first();

            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return response()->json(['status' => 'failed', 'message' => 'Invalid User']);
            }

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['status' => 'success', 'message' => 'Login Successful','token'=>$token]);
        }
        catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function UserProfile(Request $request){
        return Auth::user();
    }

    function UserLogout(Request $request){
        $request->user()->tokens()->delete();
        return redirect('/login');
    }

    function SendOTPCode(Request $request): JsonResponse
    {

        try {
            $request->validate([
                'email' => 'required|string|email|max:50'
            ]);

            $email=$request->input('email');
            $otp=rand(1000,9999);
            $count=User::where('email','=',$email)->count();

            if($count==1){
                Mail::to($email)->send(new OTPMail($otp));
                User::where('email','=',$email)->update(['otp'=>$otp]);
                return response()->json(['status' => 'success', 'message' => '4 Digit OTP Code has been send to your email !']);
            }
            else{
                return response()->json([
                    'status' => 'fail',
                    'message' => 'Invalid Email Address'
                ]);
            }
        }
        catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function VerifyOTP(Request $request): JsonResponse
    {

        try {
            $request->validate([
                'email' => 'required|string|email|max:50',
                'otp' => 'required|string|min:4'
            ]);

            $email=$request->input('email');
            $otp=$request->input('otp');

            $user = User::where('email','=',$email)->where('otp','=',$otp)->first();

            if(!$user){
                return response()->json(['status' => 'fail', 'message' => 'Invalid OTP']);
            }

            // CurrentDate-UpdatedTe=4>Min

            User::where('email','=',$email)->update(['otp'=>'0']);

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['status' => 'success', 'message' => 'OTP Verification Successful','token'=>$token]);
        }
        catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ResetPassword(Request $request): JsonResponse
    {

        try{
            $request->validate([
                'password' => 'required|string|min:3'
            ]);
            $id=Auth::id();
            $password=$request->input('password');
            User::where('id','=',$id)->update(['password'=>Hash::make($password)]);
            return response()->json(['status' => 'success', 'message' => 'Password Request Successful']);

        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage(),]);
        }
    }

    function UpdateProfile(Request $request): JsonResponse
    {
        $user_id=Auth::id();

        try{
            $request->validate([
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'mobile' => 'required|string|max:50',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('img')) {

                // Upload New File
                $img=$request->file('img');
                $t=time();
                $file_name=$img->getClientOriginalName();
                $img_name="{$user_id}-{$t}-{$file_name}";
                $img_url="uploads/{$img_name}";
                $img->move(public_path('uploads'),$img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);

                // Update Profile
                return User::where('id','=',Auth::id())->update([
                    'firstName'=>$request->input('firstName'),
                    'lastName'=>$request->input('lastName'),
                    'mobile'=>$request->input('mobile'),
                    'img'=>$img_url

                ]);
            }else {
                return User::where('id','=',Auth::id())->update([
                    'firstName'=>$request->input('firstName'),
                    'lastName'=>$request->input('lastName'),
                    'mobile'=>$request->input('mobile'),
                ]);
            }

        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

}
