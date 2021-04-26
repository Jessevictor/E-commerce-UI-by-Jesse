<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productview extends Controller
{
    //
    public function productsdetails(){
        return view('product.product_view');
    }

}
