<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
      return Order::join('products', 'products.id', '=', 'orders.product_id')
      -> orderBy('created_at', 'desc')
      ->get(['orders.*', 'products.name','products.slug','products.description','products.price']);
    }


    public function store(Request $request){
      $request->validate([
        'fullname' => 'required',
        'adresse' => 'required',
        'email' => 'required',
        'city' => 'required',
        'postale' => 'required',
        'phone' => 'required',
        'product_id' => 'required'
      ]); 

      return Order::create($request->all());
    }

    public function show($id){
      return Order::find($id);
    }


    public function Update(Request $request,$id){
      $order = Order::find($id);
      $order->Update($request->all());
      return $order;
    }

    public function destroy($id){
      return Order::destroy($id);
    }
}
