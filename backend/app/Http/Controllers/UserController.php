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

    public function follow(Request $request, String $name)
    {
        $user = User::where('name', $name)->first();

        if ($user->id === $request->user()->id) {
            return abort('404', 'Cannot follow yourself');
        }

        $request->user()->followings()->detach('$user');
        $request->user()->followings()->attach('$user');

        return ['name' => $name];
    }

    public function unfollow(Request $request, String $name)
    {
        $user = User::where('name', $name)->first();

        if ($user->id === $request->user()->id) {
            return abort('404', 'Cannot follow yourself');
        }

        $request->user()->followings()->detach('$user');

        return ['name' => $name];
    }}
