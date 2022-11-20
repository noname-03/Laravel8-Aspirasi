<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\TitleSubCategory;

class TitileSubCategoryController extends Controller
{

    public function index($categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $titleSubCategories = $subCategories->titleSubCategories;
        return view('admin.titlesubcategory.index', [
            'category' => $category,
            'subCategories' => $subCategories,
            'titleSubCategory' => $titleSubCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategory = SubCategory::findOrFail($subCategoryId);
        return view('admin.titlesubcategory.create', [
            'category' => $category,
            'subCategory' => $subCategory
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $categoryId, $subCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $subCategories->titleSubCategories()->create($request->all());
        return redirect()->route('admin.titlesubcategory.index', [$categoryId, $subCategoryId]);
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
    public function edit($categoryId, $subCategoryId, $titleSubCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $titleSubCategories = $subCategories->titleSubCategories->find($titleSubCategoryId);
        return view('admin.titlesubcategory.edit')->with([
            'category' => $category,
            'subCategories' => $subCategories,
            'titleSubCategories' => $titleSubCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId, $subCategoryId, $titleSubCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $titleSubCategories = $subCategories->titleSubCategories->find($titleSubCategoryId);
        $titleSubCategories->update($request->all());
        return redirect()->route('admin.titlesubcategory.index', [$categoryId, $subCategoryId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId, $subCategoryId, $titleSubCategoryId)
    {
        $category = Category::findOrFail($categoryId);
        $subCategories = $category->subCategories()->find($subCategoryId);
        $titleSubCategories = $subCategories->titleSubCategories->find($titleSubCategoryId);
        $titleSubCategories->delete();
        return redirect()->route('admin.titlesubcategory.index', [$categoryId, $subCategoryId]);
    }
}
