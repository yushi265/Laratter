<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function show(string $name)
    {
        $tag = Tag::with('articles')->where('name', $name)->first();

        return view('tags.show', ['tag' => $tag]);
    }
}
