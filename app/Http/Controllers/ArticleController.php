<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }
    public function index()
    {
        $articles = User::all();
        return view('pages.articles', compact('articles'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.articleform', compact('users'));
    }

    public function store(Request $request)
    {
        $store = new Article();
        $store->text = $request->text;
        $store->title = $request->title;
        $store->user_id = $request->user_id;

        $store->save();
        return redirect('/backoff');
    }

    public function destroy($id)
    {
        $delete = Article::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('pages.fullarticle', compact('article'));
    }
}
