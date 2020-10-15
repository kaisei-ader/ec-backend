<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
        return Cart::create([
        'quantity' =>$request->quantity,
        'product_id'=> $request->productId,
        ]);
    }
}
