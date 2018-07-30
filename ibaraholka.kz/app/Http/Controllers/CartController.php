<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Good;

class CartController extends Controller
{
   	public function add($good_id){

   		if(!Auth::guest()){
   			if(count(Cart::where('buyer_id', Auth::user()->id)->where('good_id', $good_id)->get()) == 0){
	   			$cart = new Cart;
	   			$cart->buyer_id = Auth::user()->id;
	   			$cart->good_id = $good_id;
	   			$cart->price = Good::find($good_id)->price;
	   			$cart->save();
   			}
   		}
   	}
}
