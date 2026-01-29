<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $todos = Todo::with('category')->paginate(10);

        return view('index', compact('todos', 'categories'));
    }
}
