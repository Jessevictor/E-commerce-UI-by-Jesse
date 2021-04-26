<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class Productdetails extends Controller
{
    //
    public function Productdetails(){
        $product=Product::get()->take(8);
        return view('product.product-details',compact('product'));
    }
}
