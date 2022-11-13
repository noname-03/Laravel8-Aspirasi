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
        return view('admin.commentAspirasi.create', [
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
        return redirect()->route('admin.commentaspiration.index', $aspiratioinId);
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
        return view('admin.commentAspirasi.edit')->with([
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
        return redirect()->route('admin.commentaspiration.index', $aspiratioinId);
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
        return redirect()->route('admin.commentaspiration.index', $aspiratioinId);
    }
}
