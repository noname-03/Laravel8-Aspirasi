<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use App\Models\Category;
use App\Models\Dprd;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $aspirations = Aspiration::latest('created_at')->limit(5)->get();
        $categories = Category::all();
        return view('guest.home.index', compact('aspirations', 'categories'));
    }

    public function aspirasi()
    {
        $aspirations = Aspiration::latest('created_at')->paginate(5);
        $categories = Category::all();
        $dprds = Dprd::all();
        return view('guest.home.aspirasi', compact('aspirations', 'categories', 'dprds'));
    }

    public function showAspirasi($id)
    {
        $aspiration = Aspiration::findOrFail($id);
        // dd($aspiration);
        return view('guest.home.showAspirasi', compact('aspiration'));
    }

    public function storeCommentAspiration(Request $request, $id)
    {
        $request['status'] = 0;
        $aspiration = Aspiration::findOrFail($id);
        $aspiration->CommentAspirations()->create($request->all());
        return redirect()->route('guest.showAspirasi', $id);
    }

    public function aspirasiCategory($id)
    {
        $dprds = Dprd::all();
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $aspirations = $category->Aspirations()->latest('created_at')->paginate(5);
        return view('guest.home.aspirasiCategory', ['aspirations' => $aspirations, 'category' => $category, 'dprds' => $dprds, 'categories' => $categories]);
        // dd($aspirations);
        // foreach ($aspirations as $key) {
        //     echo $key->title;
        //     echo '</br>';
        // }
        // $category->load('aspirations');
        // // dd($category);
        // foreach ($category as $item) {
        //     echo $item->title;

    }
}
