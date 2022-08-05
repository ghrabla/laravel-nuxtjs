<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate( [
         'name' => 'required|string',
         'email' => 'required|string|unique:users,email',
         'password' => 'required|string'
        ] );
 
 
        $admin = Admin::create([
           'name' => $fields['name'],
           'email' => $fields['email'],
           'password' => bcrypt($fields['password'])
        ]);
 
        $token = $admin->createToken('myapptoken')->plainTextToken;
 
        $response = [
            'admin' => $admin,
            'token' => $token  
        ];
        return response($response, 201); 
     }

     public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $admin = Admin::where('email', $fields['email'])->first();

        // Check password
        if(!$admin || !Hash::check($fields['password'], $admin->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $admin->createToken('myapptoken')->plainTextToken;

        $response = [
            'admin' => $admin,
            'token' => $token
        ];

        return response($response, 201);
    }


    public function logout(Request $request) {
        $request->admin()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    public function index(){
       return Admin::all();
    }


     
}
