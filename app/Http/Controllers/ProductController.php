<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('products_index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        $brands = Brand::pluck('id','brand');
        return view( 'products_create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "Registro Realizado";
        //dd($request);
        Product::create($request->all());
        return to_route('products.index')->with('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //echo "Show Productos";
        return view('products_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //echo "Edit Productos";
        $brands = Brand::pluck('id','brand');
        echo view('products_edit', compact('brands','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //echo "Update Productos";
        $product->update($request->all());  // Actualizar los datos del producto
        return to_route('products.index')->with('status','Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        echo "Destroy Productos";
    }
}
