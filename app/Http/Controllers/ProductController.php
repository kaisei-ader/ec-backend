<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function get()
    {
        return Product::all();
    }

    public function add(Request $request)
    {
        return Product::create([
        'title' =>$request->title,
        'path'=> str_replace('public','storage',Storage::put('public/product_image',$request->file('image'))),
        'price'=> $request->price,
        'text'=> $request->text,
        ]);
    }
}
