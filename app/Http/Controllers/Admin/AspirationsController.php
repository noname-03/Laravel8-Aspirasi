<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aspiration;
use App\Models\Category;
use App\Models\Dprd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AspirationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirations = Aspiration::all();
        return view('admin.aspiration.index', compact('aspirations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dprds = Dprd::all();
        $categories = Category::all();
        return view('admin.aspiration.create', compact('dprds', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Aspiration::create($request->all());
        $imageName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/lampiran/aspirasi/', $imageName);
        $request['attachment'] = $imageName;
        Aspiration::create($request->except('file'));
        return redirect()->route('admin.aspiration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dprds = Dprd::all();
        $categories = Category::all();
        $aspirations = Aspiration::findOrFail($id);
        return view('admin.aspiration.edit', compact('aspirations', 'dprds', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aspirations = Aspiration::findOrFail($id);
        // $aspirations->update($request->all());
        $imageName = '';
        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/lampiran/aspirasi/', $imageName);
            if ($aspirations->attachment) {
                Storage::delete('public/lampiran/aspirasi/' . $aspirations->photo);
            }
        } else {
            $imageName = $aspirations->attachment;
        }
        $request['attachment'] = $imageName;
        $aspirations->update($request->except('file'));
        return redirect()->route('admin.aspiration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aspirations = Aspiration::findOrFail($id);
        Storage::delete('public/lampiran/aspirasi/' . $aspirations->attachment);
        $aspirations->delete();
        return redirect()->route('admin.aspiration.index');
    }
}
