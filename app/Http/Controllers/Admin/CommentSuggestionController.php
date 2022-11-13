<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suggestion;

class CommentSuggestionController extends Controller
{

    public function index($suggestionId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        $CommentSuggestions = $suggestion->CommentSuggestions;
        return view('admin.commentsuggestion.index', [
            'suggestion' => $suggestion,
            'CommentSuggestions' => $CommentSuggestions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($suggestionId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        return view('admin.commentsuggestion.create', [
            'suggestion' => $suggestion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $suggestionId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        $suggestion->CommentSuggestions()->create($request->all());
        return redirect()->route('admin.commentsuggestion.index', $suggestionId);
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
    public function edit($suggestionId, $commentId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        $CommentSuggestions = $suggestion->CommentSuggestions()->find($commentId);
        // dd($product);
        return view('admin.commentsuggestion.edit')->with([
            'suggestion' => $suggestion,
            'CommentSuggestions' => $CommentSuggestions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $suggestionId, $commentId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        $CommentSuggestions = $suggestion->CommentSuggestions()->find($commentId);
        $CommentSuggestions->update($request->all());
        // $product->update($request->except(['_method', '_token']));
        return redirect()->route('admin.commentsuggestion.index', $suggestionId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($suggestionId, $commentId)
    {
        $suggestion = Suggestion::findOrFail($suggestionId);
        $CommentSuggestions = $suggestion->CommentSuggestions()->find($commentId);
        $CommentSuggestions->delete();
        return redirect()->route('admin.commentsuggestion.index', $suggestionId);
    }
}
