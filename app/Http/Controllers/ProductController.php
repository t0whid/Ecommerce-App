<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::paginate(5);
        //dd($data);

        return view('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['products' => $data]);
    }
    function search(Request $request)
    {
            $search = $request->input('search');

        $data= Product::
        where('name', 'like', '%'.$request->input('query').'%')
        ->get();
        dd($data);
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    function cartList()
    {
        $user_id = Session::get('user')['id'];

        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->select('products.*', 'carts.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $user_id = Session::get('user')['id'];

        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->select('products.*', 'carts.id as cart_id')
            ->sum('products.price');

        //return $products;
        return view('ordernow', ['products' => $products]);
    }

    function orderPlace(Request $request)
    {
        $user_id = Session::get('user')['id'];
        $all_cart = Cart::where('user_id', $user_id)->get();

        foreach ($all_cart as $cart) {
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "Pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "Pending";
            $order->address = $request->address;

            $order->save();
            Cart::where('user_id', $user_id)->delete();
        }
        $request->input();
        return redirect('/');
    }

    function myOrders()
    {
        $user_id = Session::get('user')['id'];

        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

            return view('myorders',['orders'=>$orders]);

    }
}
