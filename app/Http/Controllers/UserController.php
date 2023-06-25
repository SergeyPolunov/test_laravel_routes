<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function show($name): Factory|View|Application
    {
        $user = User::where('name', $name)->first();
        if (!$user) {
            return view('users.notfound');
        }

        return view('users.show', compact('user'));
    }
}
