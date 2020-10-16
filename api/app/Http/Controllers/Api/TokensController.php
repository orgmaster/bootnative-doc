<?php

namespace App\Http\Controllers\Api;

use Hash;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;

class TokensController extends Controller
{
    public function get(Request $request) // login
    {
        $credentials = $request->only('email','password');
        $validator  = Validator::make($credentials,[
            'password' => 'required|string|max:16',
            'email' => 'required|email|max:255|exists:users',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        if($token = JWTAuth::attempt($credentials)){
            return response()->json([
                'data' => [
                    'token' => $token,
                    'user' => User::where('email',$request->email)->first()
                ]
            ], 200);
        }

        return response()->json([
            'errors' => [
                [
                    'status' => "401",
                    'title' => 'Unauthenticated',
                    'detail' => 'The credentials do not match our records'
                ]
            ] 
        ],401);
        
    }

    public function refresh()
    {
        if($token = JWTAuth::getToken()){
            try {
                $token  = JWTAuth::refresh($token);
                return response()->json([
                    'data' => [
                        'token' => $token
                    ]
                ], 200);
                
            } catch (TokenExpiredException $e) {
                return response()->json([
                    'errors' => [
                        [
                            'status' => "401",
                            'title' => 'Expired token',
                            'detail' => 'The token cannot be refreshed (expired), try to get it again'
                        ]
                    ] 
                ], 401);
            } catch (TokenBlacklistedException $e) {
                return response()->json([
                    'errors' => [
                        [
                            'status' => "401",
                            'title' => 'Blacklisted token',
                            'detail' => 'The token cannot be refreshed (blacklisted), try to get it again'
                        ]
                    ] 
                ], 401);
            }
        }
    }

    public function expire() //logout
    {
        if ($token = JWTAuth::getToken())
        {
            try{
                JWTAuth::invalidate($token);
                return response()->json(['status' => 'OK'],200);
            }catch(JWTExeption $e)
            {
                return response()->json([
                    'errors' => [
                        [
                            'status' => "401",
                            'title' => 'Expiration',
                            'detail' => 'Fail to try expire token'
                        ]
                    ] 
                ], 401);
            }
        }
    }
}
