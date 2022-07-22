<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return Contact::all();
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'fullname' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        return Contact::create($request->all());
    }

    public function show($id)
    {
        //
        return Contact::find($id);
    }

    public function update(Request $request, $id)
    {
        //
        $product = Contact::find($id);
        $product->Update($request->all());
        return $product;
    }

    public function destroy($id){

      return Contact::destroy($id);
    }

    public function search($fullname){
        return Contact::where('fullname','like','%'.$fullname.'%')->get();
    }


}
