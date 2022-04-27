<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function shop(){
        $result = DB::table("products")->get();
        return view('shop',['products' => $result]);
    }

    public function about(){
        $arrPic=[
            "img/kebun1.jpg",
            "img/kebun6.jpg",
            "img/kebun4.jpg",
            "img/kebun5.jpg",
            "img/kebun7.jpg",
            "img/kebun12.jpg",
            "img/kebun9.jpg",
            "img/kebun10.jpg",
            "img/kebun11.jpg"];
        return view('about')->with("about",$arrPic);
    }

    public function contact(){
        return view('contact');
    }

    public function insert(){
        $result = DB::table("products")->insert(
            [
                [
                    'nama' => 'Alpukat',
                    'harga' => 15000,
                    'jenis' => 'Buah',
                    'stok' => 30,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b1.png',
                ],
                [
                    'nama' => 'Apel',
                    'harga' => 13000,
                    'jenis' => 'Buah',
                    'stok' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b2.png',
                ],
                [
                    'nama' => 'Durian',
                    'harga' => 40000,
                    'jenis' => 'Buah',
                    'stok' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b3.png',
                ],
                [
                    'nama' => 'Jeruk',
                    'harga' => 10000,
                    'jenis' => 'Buah',
                    'stok' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b4.png',
                ],
                [
                    'nama' => 'Melon',
                    'harga' => 25000,
                    'jenis' => 'Buah',
                    'stok' => 24,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b5.png',
                ],
                [
                    'nama' => 'Pisang',
                    'harga' => 8000,
                    'jenis' => 'Buah',
                    'stok' => 25,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b6.png',
                ],
                [
                    'nama' => 'Semangka',
                    'harga' => 20000,
                    'jenis' => 'Buah',
                    'stok' => 21,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b7.png',
                ],
                [
                    'nama' => 'Strawberry',
                    'harga' => 15000,
                    'jenis' => 'Buah',
                    'stok' => 30,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b8.png',
                ],
                [
                    'nama' => 'Nanas',
                    'harga' => 22000,
                    'jenis' => 'Buah',
                    'stok' => 17,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/b9.png',
                ],
                // Sayur
                [
                    'nama' => 'Brokoli',
                    'harga' => 8000,
                    'jenis' => 'Sayur',
                    'stok' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s1.png',
                ],
                [
                    'nama' => 'Jagung',
                    'harga' => 5000,
                    'jenis' => 'Sayur',
                    'stok' => 40,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s2.png',
                ],
                [
                    'nama' => 'Kangkung',
                    'harga' => 2000,
                    'jenis' => 'Sayur',
                    'stok' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s3.png',
                ],
                [
                    'nama' => 'Kentang',
                    'harga' => 4000,
                    'jenis' => 'Sayur',
                    'stok' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s4.png',
                ],
                [
                    'nama' => 'Kubis',
                    'harga' => 6000,
                    'jenis' => 'Sayur',
                    'stok' => 11,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s5.png',
                ],
                [
                    'nama' => 'Sawi',
                    'harga' => 2500,
                    'jenis' => 'Sayur',
                    'stok' => 14,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s6.png',
                ],
                [
                    'nama' => 'Terong',
                    'harga' => 3500,
                    'jenis' => 'Sayur',
                    'stok' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s7.png',
                ],
                [
                    'nama' => 'Tomat',
                    'harga' => 5000,
                    'jenis' => 'Sayur',
                    'stok' => 32,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s8.png',
                ],
                [
                    'nama' => 'Wortel',
                    'harga' => 9000,
                    'jenis' => 'Sayur',
                    'stok' => 23,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image' => 'img/s9.png',
                ],
            ]
            );
        dump($result);
    }

    public function admin(){
        return view('admin');
    }

    public function login(Request $request){
        $ValidateData = $request-> validate([
            'idadmin'           => 'required|size:5',
            'name'              => 'required|min:3|max:50',
            'email'             => 'required',
        ]);

        return redirect('/input');
    }

    public function input(){
        return view('input');
    }

    public function search(Request $request){
        $search = $request->search;
        $result = DB::table("products")
        ->where('nama','like',"%".$search."%")->paginate();
        return view('shop',['products' => $result]);
    }

    public function cart(){
        return view('cart');
    }

    public function cart2(){
        return view('cart2');
    }

    public function tambahCart(Request $request){
        $validatedData = $request-> validate([
            'nama' => 'required',
            'jumlah' => 'required',
            ]);

            DB::table('cart')->insert([
                'nama' => request()->nama,
                'jumlah' => request()->jumlah,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
            return redirect('/cart')->with('success', 'Product berhasil ditambahkan');
    }

    public function dataCart(){
        $result = DB::select(
            "SELECT
                cart.nama, cart.jumlah, products.harga, products.harga*cart.jumlah AS Total FROM products INNER JOIN cart ON products.nama = cart.nama;");
            return view('cart2',['products' => $result]);
            // dump($result);
    }

    public function checkOut(){
        $result = DB::statement("TRUNCATE cart");
        return redirect('/cart2');
    }

    public function dataCheckOut(){
        return view('checkout');
    }

    public function delete(){
        $result = DB::statement("TRUNCATE cart");
        return redirect('/cart2');
    }
}
