<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $shortenedUrl = Str::random(10);

        Url::create([
            'original_url' => $request->original_url,
            'shortened_url' => $shortenedUrl
        ]);

        return redirect()->back()->with('shortenedUrl', url($shortenedUrl));
    }

    public function show($shortenedUrl)
    {
        $url = Url::where('shortened_url', $shortenedUrl)->firstOrFail();
        return redirect($url->original_url);
    }
}

