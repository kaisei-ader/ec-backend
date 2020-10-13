<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        return Product::create([
        'title' =>$request->title,
        'path'=> Storage::put('public_image',$request->file('image')),
        'price'=> $request->price,
        'text'=> $request->text,
        ]);
    }
}
