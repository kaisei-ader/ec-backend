<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = Cart::where('product_id', '=', $request->productId);
        if($cart->exists()){
            $record = $cart->first();
            $record->update([
                'quantity' => $record->quantity +  $request->quantity
            ]);
            return $record;
        } else {
            return Cart::create([
                'quantity' =>$request->quantity,
                'product_id'=> $request->productId,
            ]);
        }
    }

    public function getAll(){
        return Cart::with('product')->get();
    }
}
