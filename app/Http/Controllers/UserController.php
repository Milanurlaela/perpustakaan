<?php

namespace App\Http\Controllers;

use App\Models\User;
Use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{

public function index ()
{
    $users = User::all();
    $roles = Role::all();
    return view ('user.user_index', compact('users', 'roles'));
}

public function create()
{
    $roles =Role::all();
    return view('user.user_create',compact('roles'));
}
public function store(Request $request)
{
    $request->validate([
     'name' => 'required|string|max:255',
     'email' => 'required|email|unique:users,email',
     'password' => 'required|string|min:8', 
     'roles' => 'required|array',  
    ]);

    $user = new User ();
    $user->name =$request->name;
    $user->email =$request->email;
    $user->password =bcrypt($request->password);
    $user->save();

    $user->assignRole($request->roles);

    return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
}

    public function edit ($id)
{
    $user = user::find($id);
    $roles = Role::all();
    return view ('user.user_edit', compact('users', 'roles'));
}
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8', 
        'roles' => 'required|array',  
       ]);

    
    $user->name =$request->name;
    $user->email =$request->email;
    if ($request->password){
        $user->password = bcrypt($request->password);
    }
    $user->save();

    $user->syncRoles($request->roles);

    return redirect()->route('users.update')->with('success', 'User berhasil ditambahkan');
}

public function hapus($id)
{
    $user = user::find($id);
    $user->delete();
    return redirect('/user');
}
}