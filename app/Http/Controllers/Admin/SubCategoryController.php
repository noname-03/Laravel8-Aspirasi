<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories;
        return view('admin.subcategory.index', [
            'category' => $category,
            'subCategories' => $subCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return view('admin.subcategory.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $category->subCategories()->create($request->all());
        return redirect()->route('admin.subcategory.index', $categoryId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $productId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        return view('admin.subcategory.edit')->with([
            'category' => $category,
            'subCategories' => $subCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $subCategories->update($request->all());
        return redirect()->route('admin.subcategory.index', $categoryId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $subCategories->delete();
        return redirect()->route('admin.subcategory.index', $categoryId);
    }
}
