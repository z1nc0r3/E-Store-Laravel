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

    public function showProductsAdmin() {
        $products = Products::all();
        return view('admin.products', ['products' => $products]);
    }

    public function showProductsCustomer() {
        $products = Products::all();
        return view('customer.order', ['products' => $products]);
    }

    public function showProductAdmin($id) {
        $product = Products::find($id);

        return view('admin.showproduct', ['product' => $product]);
    }

    public function showProductCustomer($id) {
        $product = Products::find($id);

        return view('customer.addtocart', ['product' => $product]);
    }

    public function deleteProduct($id) {
        $product = Products::find($id);

        if ($product -> delete()) {
            return redirect() -> route('admin.products');
        } else {
            return redirect() -> route('admin.products');
        }
    }

    public function editProduct($id) {
        $product = Products::find($id);
        return view('admin.editproduct', ['product' => $product]);
    }

    public function updateProduct(Request $request) {
        $request -> validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required | numeric'
        ]);

        $product = Products::find($request -> get('id'));

        $product -> name = $request -> get('name');
        $product -> detail = $request -> get('detail');
        $product -> price = $request -> get('price');

        if ($product -> save()) {
            return redirect() -> route('admin.products');
        } else {
            return redirect() -> back();
        }
    }
}
