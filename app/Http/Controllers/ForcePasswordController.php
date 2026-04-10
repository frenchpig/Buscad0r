<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ForcePasswordController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'new_password' => ['required', 'confirmed', Password::defaults()],
        ], [
            'new_password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        $user = $request->user();
        $user->force_password_change = false;
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('status', 'password-updated');
    }
}
