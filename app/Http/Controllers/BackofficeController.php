<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('isWebmaster')->only('index');
    }

    public function index()
    {
        $articles = Article::all();
        $users = User::all();
        return view('pages.backoffice', compact('articles', 'users'));
    }
}
