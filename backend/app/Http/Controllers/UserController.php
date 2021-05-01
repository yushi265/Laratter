<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class UserController extends Controller
{
    public function show($id)
    {
        // ddd($id);
        $user = User::where('id', $id)->first();
        // ddd($user);
        $articles = Article::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('users.show', ['user' => $user, 'articles' => $articles]);
    }
}
