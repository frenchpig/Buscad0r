<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users-admin',['users'=>$users]);
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|in:admin,user',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make('123456'),
            'force_password_change' => true, // <-- Fuerza el cambio solo en usuarios nuevos via Admin
        ]);

        return redirect()->back()->with('success','Usuario creado correctamente. La contraseña temporal es 123456.');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success','Usuario eliminado correctamente.');
    }
}
