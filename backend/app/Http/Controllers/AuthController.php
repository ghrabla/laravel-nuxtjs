<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // without confirmation 
    public function register(Request $request){
       $fields = $request->validate( [
        'name' => 'required|string',
        'email' => 'required|string|unique:users,email',
        'password' => 'required|string'
       ] );


       $user = User::create([
          'name' => $fields['name'],
          'email' => $fields['email'],
          'password' => bcrypt($fields['password'])
       ]);

       $token = $user->createToken('myapptoken')->plainTextToken;

       $response = [
           'user' => $user,
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
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'data' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return [
            'message' => 'Logged out '
        ];
    }

    public function index(){

        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        //
        $product = User::find($id);
        $product->Update($request->all());
        return $product;
    }

    public function destroy($id){
        return User::destroy($id);
    }

    public function search($fullname){
        return User::where('name','like','%'.$fullname.'%')->get();
    }
}
