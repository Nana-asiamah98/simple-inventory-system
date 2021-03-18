<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cates = Category::get();
        

        return view("sectionClient.category.viewCategory",compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sectionClient.category.addCategory");
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
            'category_name' => 'required',
            
        ]);

        $cate_create = Category::create(request(['category_name']));
        Alert::toast('Added Successfully','success');


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        //
        $cate = Category::find($id);
        return view("sectionClient.category.editCategory",compact(['cate']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->validate(request(),[
            'category_name' => 'required',
            
        ]);
        $update_category = Category::find(request('category_id'));
        
        $update_category->category_name = request('category_name');
        $update_category->save();
        
        Alert::toast('Updated Successfully','success');

        return redirect()->route('view-category-page');
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        //
        $remove_category = Category::find($id);
        $remove_category->delete();
        Alert::toast('Deleted Successfully','success');

        return redirect()->route('view-category-page');
    }
}
