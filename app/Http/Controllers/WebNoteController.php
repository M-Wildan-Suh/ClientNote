<?php

namespace App\Http\Controllers;

use App\Models\WebNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newNote = new WebNote();

        $newNote->title = $request->title;
        $newNote->description = $request->description;
        $newNote->no_tlp = $request->no_tlp;

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time();
            $imagePath = public_path('storage/images/note/');

            // Pastikan direktori ada, jika tidak maka buat
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($imageFile->getPathname());

            $imageFullPath = $imagePath . $imageName . '.webp';
            $image->save($imageFullPath);

            $newNote->image = $imageName . '.webp';
        }

        $newNote->save();

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

        $webNote->title = $request->title;
        $webNote->description = $request->description;
        $webNote->no_tlp = $request->no_tlp;

        if ($request->hasFile('image')) {
            if ($webNote->image) {
                $path = public_path('storage/images/note/' . $webNote->image);

                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $imageFile = $request->file('image');
            $imageName = time();
            $imagePath = public_path('storage/images/note/');

            // Pastikan direktori ada, jika tidak maka buat
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($imageFile->getPathname());

            $imageFullPath = $imagePath . $imageName . '.webp';
            $image->save($imageFullPath);

            $webNote->image = $imageName . '.webp';
        }

        $webNote->save();

        return redirect()->back()->with('success', 'Note berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, WebNote $webNote)
    {
        $webNote = WebNote::find($id);

        if ($webNote->image) {
            $path = public_path('storage/images/note/' . $webNote->image);

            if (file_exists($path)) {
                unlink($path);
            }
        }

        $webNote->delete();

        return redirect()->back()->with('success', 'Note berhasil Hapus');
    }
}
