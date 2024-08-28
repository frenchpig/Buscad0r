<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users-admin',['users'=>$users]);
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success','Usuario eliminado correctamente.');
    }
}
