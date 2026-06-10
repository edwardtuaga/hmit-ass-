<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class QueryBuilderProductController extends Controller
{
    
    public function index()
    {
        
        $products = DB::table('products')->orderBy('id', 'desc')->get();
        return view('query_builder.index', compact('products'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('query-builder.index')->with('success', 'Data berhasil ditambahkan via Query Builder!');
    }

    
    public function destroy($id)
    {
        
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('query-builder.index')->with('success', 'Data berhasil dihapus via Query Builder!');
    }
}