<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function addProduct(Request $request) {
        $request -> validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required | numeric'
        ]);

        $product = new Products([
            'name' => $request -> name,
            'detail' => $request -> detail,
            'price' => $request -> price
        ]);

        if ($product -> save()) {
            return redirect() -> route('admin.products');
        } else {
            return redirect() -> route('admin.addproducts');
        }
    }
}
