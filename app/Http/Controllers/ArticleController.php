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
        $this->middleware('isWebmaster')->only('create', 'edit');
    }
    public function index()
    {
        $articles = Article::all();
        $users = User::all();
        return view('pages.articles', compact('articles', 'users'));
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

    public function edit($id)
    {
        $articles = Article::find($id);
        $users = User::all();
        return view('pages.editarticle', compact('articles', 'users'));
    }

    public function update(Request $request, $id)
    {
        $update = article::find($id);
        $update->title = $request->title;
        $update->user_id = $request->user_id;
        $update->text = $request->text;
        $update->save();
        return redirect('/backoff');
    }
}
