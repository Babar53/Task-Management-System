<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $userWithRole = User::with('roles')->get();

        return view('panel.user.index', compact('userWithRole'));
    }
}
