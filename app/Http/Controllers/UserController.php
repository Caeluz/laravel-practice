<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show all users
    public function index(Request $request) {
        return view('users.index', [
            //
            'users' => User::all()
        ]);
    }
}
