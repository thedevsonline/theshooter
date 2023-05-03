<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
      if (Auth::check())
      {
            $user = Auth::user()->role;

            if ($user == "Admin")
            {
                return view("admin.dashboard");
            }
             else
             {
                return view("user.index");
            }
        }
        else
        {
            return view("user.index");
        }
    }

    public function allAccounts()
    {

        $users= User::all();
        return view ("admin.allAccounts", compact('users'));
    }
}
