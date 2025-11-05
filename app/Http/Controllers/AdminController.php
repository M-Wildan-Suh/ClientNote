<?php

namespace App\Http\Controllers;

use App\Models\WebNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $data = WebNote::
            when($request->cari && $request->cari != 'all', function ($query, $request) {
                return $query->where('status', 'like', '%' . $request->cari . '%');
            })
            ->latest()
            ->get();


        return view('admin.dashboard', compact('data'));
    }

    public function note($id) {
        $data = WebNote::find($id);

        return view('admin.note', compact('data'));
    }
}
