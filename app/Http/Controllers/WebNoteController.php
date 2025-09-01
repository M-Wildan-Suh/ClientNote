<?php

namespace App\Http\Controllers;

use App\Models\WebNote;
use Illuminate\Http\Request;

class WebNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $newnote = new WebNote();

        $newnote->domain_name = $request->domain_name;
        $newnote->description = $request->description;

        $newnote->save();

        return redirect()->back()->with('success', 'Note berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(WebNote $webNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebNote $webNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, WebNote $webNote)
    {
        $webNote = WebNote::find($id);

        $webNote->domain_name = $request->domain_name;
        $webNote->description = $request->description;

        $webNote->save();

        return redirect()->back()->with('success', 'Note berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, WebNote $webNote)
    {
        $webNote = WebNote::find($id);
        $webNote->delete();

        return redirect()->back()->with('success', 'Note berhasil diedit');
    }
}
