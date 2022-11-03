<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isAdmin']);

        // $this->middleware('isRedacteur')->only('destroy', 'create', 'edit');
    }

    // $this->middleware([''])
    public function index()
    {

        $users = User::all();
        return view('pages.admin', compact('users'));
    }
}
