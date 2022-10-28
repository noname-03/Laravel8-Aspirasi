<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use App\Models\CommentAspirations;
use Illuminate\Http\Request;

class CommentAspiration extends Controller
{
    public function index($aspiratioinId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        $CommentAspirations = $aspiration->CommentAspirations;
        return view('admin.commentAspirasi.index', [
            'aspiration' => $aspiration,
            'CommentAspirations' => $CommentAspirations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($aspiratioinId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        // $category = Category::all();
        return view('admin.product.create', [
            'aspiration' => $aspiration
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $aspiratioinId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        $aspiration->CommentAspirations()->create($request->all());
        return redirect()->route('admin.product.index', $aspiratioinId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $productId)
    {
        // $user = User::findOrFail($userId);
        // $product = $user->products()->find($productId);
        // // dd($product);
        // return view('admin.product.show')->with([
        //     'user' => $user,
        //     'product' => $product
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($aspiratioinId, $commentId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        $CommentAspirations = $aspiration->CommentAspirations()->find($commentId);
        // dd($product);
        return view('admin.product.edit')->with([
            'aspiration' => $aspiration,
            'CommentAspirations' => $CommentAspirations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $aspiratioinId, $commentId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        $CommentAspirations = $aspiration->CommentAspirations()->find($commentId);
        $CommentAspirations->update($request->all());
        // $product->update($request->except(['_method', '_token']));
        return redirect()->route('admin.product.index', $aspiratioinId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($aspiratioinId, $commentId)
    {
        $aspiration = Aspiration::findOrFail($aspiratioinId);
        $CommentAspirations = $aspiration->CommentAspirations()->find($commentId);
        $CommentAspirations->delete();
        return redirect()->route('admin.product.index', $aspiratioinId);
    }
}
