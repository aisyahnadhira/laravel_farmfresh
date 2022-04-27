<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sayur extends Controller
{
    public function store(Request $request){
        $validatedData = $request-> validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'image' => 'required',
            ]);

            DB::table('products')->insert([
                'nama' => request()->nama,
                'harga' => request()->harga,
                'jenis' => request()->jenis,
                'stok' => request()->stok,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => request()->image,

            ]);
            return redirect('/input');
    }
}
