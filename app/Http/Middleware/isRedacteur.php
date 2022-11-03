<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isRedacteur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->route();
        $id = $request->route()->parameters()['id'];
        $article = Article::find($id);
        $user_id = Article::find($request->route()->parameters()['id'])->user_id;

        if (Auth::user()->id == $user_id) {
            // dd($request->route());
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
