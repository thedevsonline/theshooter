<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AccountController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Auth::user()->save();

            if (strtolower(auth()->user()->role) == "Admin") {
                return redirect()->intended(route("admin.dashboard"))->withSuccess('Signed in');
            } else {
                return redirect()->intended(route("user.index"))->withSuccess('Signed in');
            }
        } else {
            return redirect("login")->withErrors('These credentials do not match our records.')->withInput($credentials);
        }
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
            
            Auth::login($user); // log in the user



            return redirect()->intended(route('admin.dashboard'))->withSuccess('Registration successful');
        } catch (\Exception $e) {
            // log the error message
            Log::error($e->getMessage());
            // redirect the user with an error message
            return redirect()->back()->withErrors('Registration failed. Please try again.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect("login");
    }
     public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with("success", "Category deleted successfully!");
    }
}
