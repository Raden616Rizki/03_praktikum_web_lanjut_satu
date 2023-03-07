<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function spot() {
        return view('products.spot');
    }
    public function farm() {
        return view('products.farm');
    }
    public function kopi() {
        return view('products.kopi');
    }
    public function strawberry() {
        return view('products.strawberry');
    }
}
