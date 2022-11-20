<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use App\Models\Category;
use App\Models\Dprd;
use App\Models\Suggestion;
use App\Models\TitleSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    public function index()
    {
        $aspirations = Aspiration::latest('created_at')->limit(5)->get();
        $suggestions = Suggestion::latest('created_at')->limit(5)->get();
        $categories = Category::all();
        return view('guest.home.index', compact('aspirations', 'categories', 'suggestions'));
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
        $dprds = Dprd::all();
        $categories = Category::all();
        return view('guest.home.showAspirasi', compact('aspiration', 'dprds', 'categories'));
    }

    public function storeCommentAspiration(Request $request, $id)
    {
        $request['status'] = 0;
        $aspiration = Aspiration::findOrFail($id);
        $aspiration->CommentAspirations()->create($request->all());
        return redirect()->route('guest.showAspirasi', $id);
    }

    public function aspirasiCategoryStore(Request $request)
    {
        // dd($request->title_sub_category_id);
        $id = $request->title_sub_category_id;
        return redirect()->route('guest.aspirasiCategory', $id);
    }

    public function aspirasiCategory($id)
    {
        $dprds = Dprd::all();
        $titleSubCategories = TitleSubCategory::findOrFail($id);
        $categories = Category::all();
        $aspirations = $titleSubCategories->Aspirations()->latest('created_at')->paginate(5);
        // dd($aspirations);
        return view('guest.home.aspirasiCategory', ['aspirations' => $aspirations, 'titleSubCategories' => $titleSubCategories, 'dprds' => $dprds, 'categories' => $categories]);
    }

    public function saran()
    {
        $suggestions = Suggestion::latest('created_at')->paginate(5);
        // dd($suggestions);
        return view('guest.home.suggestion', compact('suggestions'));
    }

    public function showSaran($id)
    {
        $suggestions = Suggestion::findOrFail($id);
        return view('guest.home.showSuggestion', compact('suggestions'));
    }

    public function storeCommentSaran(Request $request, $id)
    {
        $request['status'] = 0;
        $suggestion = Suggestion::findOrFail($id);
        $suggestion->commentSuggestions()->create($request->all());
        return redirect()->route('guest.showSaran', $id);
    }

    public function storeSaran(Request $request)
    {
        $request['status'] = 0;
        Suggestion::create($request->all());
        return redirect()->route('guest.saran');
    }

    public function storeAspirasi(Request $request)
    {
        $request['status'] = 0;
        $imageName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/lampiran/aspirasi/', $imageName);
        $request['attachment'] = $imageName;
        Aspiration::create($request->except('file'));
        return redirect()->route('guest.aspirasi');
    }

    public function tentang()
    {
        return view('guest.home.about');
    }

    public function kontak()
    {
        return view('guest.home.contact');
    }
}
