<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Brands\StoreRequest;
use App\Http\Requests\Brands\UpdateRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::get();
        return view('admin/brands/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        $brands = Brand::pluck('id','brand');
        return view( 'admin/brands/create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        Brand::create($request->all());
        return to_route('index')->with('status','Marca Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        return view('admin/brands/show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
        $brands = Brand::pluck('id','brand');
        echo view('admin/brands/edit', compact('brands','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brand $brand)
    {
        //
        $brand->update($request->all());
        return to_route('index')->with('status','Marca Actualizada');
    }

    public function delete(Brand $brand)
    {
        echo view('admin.brands.delete', compact('brand'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return to_route('brand.index')->with('status','Marca Eliminada');
    }
}
