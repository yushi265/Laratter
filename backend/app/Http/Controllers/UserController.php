<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class UserController extends Controller
{
    public function show($name)
    {
        // ddd($name);
        $user = User::where('name', $name)->first();
        // ddd($user);
        $articles = $user->articles->sortByDesc('created_at');
        return view('users.show', ['user' => $user, 'articles' => $articles]);
    }
}
