<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Undefined;

class isWebMaster
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

        // $id = $request->route()->parameters()['id'];
        // $article = Article::find();

        if (Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->role_id == 4 || Auth::user()->role_id == 5)) {
            return $next($request);
        } else {
            dd('nope');
            return redirect()->back();
        }
    }
}
