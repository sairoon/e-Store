<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;

    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->product_name,
            'price' => $this->product->selling_price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $this->product->image,
            ]
        ]);
        return redirect('/cart-show');
    }
    public function show()
    {
        return view('frontEnd.cart.cart', [
            'cart_products' => Cart::getContent(),
        ]);
    }
    public function update(Request $request, $id){
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ],
        ]);
        return back()->with('message', 'Cart product info update.');
    }
    public function remove($id)
    {
        Cart::remove($id);
        return back()->with('message', 'Cart product info deleted.');
    }
}
