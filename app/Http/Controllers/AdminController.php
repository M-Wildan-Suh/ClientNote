<?php

namespace App\Http\Controllers;

use App\Models\WebNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $url = 'http://client.webz.biz/api/domain';

        $response = Http::get($url);

        if ($response->successful()) {
            $api = $response->object(); // mengubah hasil response jadi object

            // Akses datanya jika perlu
            $domain = $api;

            $domainName = $request->nama_domain;

            $data = WebNote::
                when($request->nama_domain && $request->nama_domain != 'all', function ($query, $domainName) {
                    return $query->where('domain_name', 'like', '%' . $domainName . '%');
                })
                ->latest()
                ->get();

            return view('admin.dashboard', compact('data', 'domain'));
        } else {
            return redirect()->route('notfound');
        }
    }
}
