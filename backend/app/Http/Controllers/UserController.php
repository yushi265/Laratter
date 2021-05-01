<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $articles = Article::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('maypages.show', ['user' => $user, 'articles' => $articles]);
    }
}
