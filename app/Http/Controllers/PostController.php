<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    
    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user,
            'posts' => $user->posts()->paginate(10),
        ]);
    }

    public function create()
    {
        $user = auth()->user();

        return view('posts.create', [
            'user' => $user,
        ]);
    }
}
