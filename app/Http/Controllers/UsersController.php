<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index()
    {

        $this->authorize('viewAny', User::class);

        $users = User::all();

        return view('users.index', ['users' => $users]);
    }
}
