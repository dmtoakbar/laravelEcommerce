<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  function index() {
    $data = Product::all();
    return view('product', ['products'=>$data]);
  }
  function detail($id) {
         $item =  Product::find($id);
         return view('detail', ['item'=> $item]);
  }
  function addToCart(Request $req) {
    if($req->session()->has('user')) {
      $cart = new Cart;
      $cart->user_id=$req->session()->get('user')['id'];
      $cart->product_id=$req->product_id;
      $cart->save();
      return redirect('/');
    } else {
      return redirect('/login');
    }
  }
static function cartItem() {
  // $user_id = Session::get('user')['id'] ?? 0;
  $user_id = Session::get('user')['id'];
  
  return Cart::where('user_id', $user_id)->count();
}


function cartList() {
  $user_id = Session::get('user')['id'];
  $products = DB::table('carts')
  ->join('products', 'carts.product_id', '=', 'products.id')
  ->where('carts.user_id', $user_id)
  ->select('products.*', 'carts.id as cart_id')
  ->get();
  return view('cartlist', ['products'=>$products]);
  
}

function removeCart($id) {
  Cart::destroy($id);
  return redirect()->back();
}

function orderNow() {
  $user_id = Session::get('user')['id'];
  $total = DB::table('carts')
  ->join('products', 'carts.product_id', '=', 'products.id')
  ->where('carts.user_id', $user_id)
  ->select('products.*', 'carts.id as cart_id')
  ->sum('products.price');
  return view('ordernow', ['total'=>$total]);
}

function orderPlace(Request $req) {
  $userId = Session::get('user')['id'];
  $allCart = Cart::where('user_id', $userId)->get();
  foreach($allCart as $cart) {
    $order = new Order;
    $order->product_id = $cart['product_id'];
    $order->user_id=$cart['user_id'];
    $order->status="pending";
    $order->payment_method=$req->payment;
    $order->payment_status="pending";
    $order->address=$req->address;
    $order->save();
    Cart::where('user_id', $userId)->delete();
  }
  return redirect('/');
}

function myOrders() {
  $user_id = Session::get('user')['id'];
  $orders = DB::table('orders')
  ->join('products', 'orders.product_id', '=', 'products.id')
  ->where('orders.user_id', $user_id)
  ->get();
  return view("myorders", ['products'=>$orders]);
}
}
