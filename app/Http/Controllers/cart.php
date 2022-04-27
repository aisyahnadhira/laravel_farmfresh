<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cart extends Controller
{

    public function dataCart(){
        // $result = DB::table("products")->get();
        // dump($result);

        // $data = DB::table('products')
        // ->join('cart','cart.nama' , '=', 'products.nama')
        // // ->select('cart.nama', 'cart.jumlah', 'products.harga')
        // ->get();
        // dump($data);

        // return view('tubes.cart2',['products' => $data]);

        $result = DB::select(
            "SELECT
                cart.nama, cart.jumlah, products.harga, products.harga*cart.jumlah AS Total FROM products INNER JOIN cart ON products.nama = cart.nama;");
            return view('cart2',['products' => $result]);
            dump($result);
    }
    public function getView(){
        $result = DB::table("products")->get();
        return view('cart2',['products' => $result]);
    }

    public function shopCart(){
        $result = DB::table("products")->get();
        return view('cart2',['products' => $result]);
    }

}
