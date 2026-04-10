<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class OfflinePasswordResetController extends Controller
{
    public function create()
    {
        return view('auth.forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.exists' => 'No se encontró ningún usuario con ese correo electrónico.'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password_reset_requested = true;
            $user->save();
        }

        return redirect()->back()->with('status', 'Solicitud enviada exitosamente. Póngase en contacto con un administrador para recibir su código de acceso temporal.');
    }
}
