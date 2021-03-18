<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Add Products
        $products = Products::get();
        return view("sectionClient.products.viewProducts",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $brands = Brand::get();
        $categories = Category::get();
        return view("sectionClient.products.addProducts",compact(['brands','categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        
        $this->validate(request(),[
            'product_name' => 'required',
            'brand' => 'required',
            'category' => 'required',
        ]);
        Alert::toast('Added Successfully','success');


        $prod_create = Products::create(request(['product_name','brand','category']));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products,$id)
    {
        //
        $product = Products::find($id);
        return view("sectionClient.products.viewProduct",compact(['product']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products,$id)
    {
        //
        $product = Products::find($id);
        $brands = Brand::get();
        $categories = Category::get();
        return view("sectionClient.products.editProduct",compact(['product','brands','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
        
        $this->validate(request(),[
            'product_name' => 'required',
            'brand' => 'required',
            'category' => 'required',
        ]); 

        $update_product = Products::find(request('product_id'));
        
        $update_product->product_name = request('product_name');
        $update_product->brand = request('brand');
        $update_product->category = request('category');
        $update_product->save();
        Alert::toast('Updated Successfully','success');

        return redirect()->route('view-products-page');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products,$id)
    {
        
        $remove_product = Products::find($id);
        $remove_product->delete();
        Alert::toast('Deleted Successfully','success');

        return redirect()->route('view-products-page');

    }
}
