<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Http\Requests\StoreTagsRequest;
use App\Http\Requests\UpdateTagsRequest;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tags::all();
        return view('dashboard.tags', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagsRequest $request)
    {
        $tags = new tags;
        $tags->name = $request->name;
        $tags->save();
        return redirect('/admin/tags')->with('success', 'Tag created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tags $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagsRequest $request, Tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tags)
    {
        //
    }
}
