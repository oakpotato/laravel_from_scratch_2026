<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Create the user...
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, #Laravel will auto hash passwords
        ]);

        // Log the user in...
        Auth::login($user);

        // Redirect to the dashboard...
        return redirect('/')->with('success', 'Your account has been created!');
    }
}
