<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::get();
        return view("sectionClient.brands.viewBrands",compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sectionClient.brands.addBrand");

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
            'brand_name' => 'required',
            
        ]);

        $brand_create = Brand::create(request(['brand_name']));
        Alert::toast('Added Successfully','success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand,$id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand,$id)
    {
        //
        $brand = Brand::find($id);
        return view("sectionClient.brands.editBrand",compact(['brand']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $this->validate(request(),[
            'brand_name' => 'required'
        ]); 

        $update_brand = Brand::find(request('brand_id'));
        
        $update_brand->brand_name = request('brand_name');
        $update_brand->save();
        Alert::toast('Updated Successfully','success');

        return redirect()->route('view-brands-page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand,$id)
    {
        //
        $remove_brand = Brand::find($id);
        $remove_brand->delete();
        Alert::toast('Deleted Successfully','success');

        return redirect()->route('view-brands-page');
    }
}
