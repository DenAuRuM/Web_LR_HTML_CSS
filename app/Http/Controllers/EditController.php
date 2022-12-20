<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function catalog_view($id)
    {
        $products = Product::where('catalog', '=', $id)->get();
        return view('shop.products', ['products' => $products]);
    }

    /*public function ($id)
    {
        $product = Product::finOrFail($id);
        return view('shop.good', ['product' => $product]);
    }*/

    public function cart_add($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['count']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "count" => 1,
                "price" => $product->price,
                "image" => $product->image,
            ];
        }
        session()->put('cart', $cart);
        return "Товар добавлен в корзину";
    }

    public function cart_inc($id){
        return $this->cart_update($id, 1);
    }

    public function cart_dec($id){
        return $this->cart_update($id, -1);
    }

    public function cart_update($id, $count)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['count'] += $count;
            if($cart[$id]['count'] < 1)
                unset($cart[$id]);
            session()->put('cart', $cart);
        } else {
            return response()->noContent(404);
        }
        return "Корзина обновлена";
    }

    public function cart_remove($id){
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        } else {
            return response()->noContent(404);
        }
        return "Корзина обновлена";
    }

    public function total_price(){
        $total = 0;
        $cart = session()->get('cart', []);
        foreach ($cart as $item)
            $total += $item['count'] * $item['price'];
        return $total;
    }

    public function cart_view(){
        $cart = session()->get('cart', []);
        return view('shop.cart', ['cart' => $cart]);
    }
}
