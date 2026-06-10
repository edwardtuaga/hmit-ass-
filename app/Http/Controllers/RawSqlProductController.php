<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class RawSqlProductController extends Controller
{
    
    public function index()
    {
        
        $products = DB::select("SELECT * FROM products ORDER BY id DESC");
        return view('raw_sql.index', compact('products'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        
        DB::insert(
            "INSERT INTO products (name, price, stock, created_at, updated_at) VALUES (?, ?, ?, ?, ?)",
            [$request->name, $request->price, $request->stock, now(), now()]
        );

        return redirect()->route('raw-sql.index')->with('success', 'Data berhasil ditambahkan via Raw SQL!');
    }

    
    public function destroy($id)
    {
        
        DB::delete("DELETE FROM products WHERE id = ?", [$id]);
        return redirect()->route('raw-sql.index')->with('success', 'Data berhasil dihapus via Raw SQL!');
    }
}