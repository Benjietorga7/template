<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules; 
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    
    public function index()
    {
        
        return view ('users.users', [
            'header' => 'Users Management',
            'users' => User::all()
        ]);
    }

    public function form()
    {
        
        return view ('users.form', [
            'header' => 'Add User',
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // for storing after validation
       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('status','Added User Succesfully');

        session()->flash('status', 'Task was successful!');
        
        // Redirect tp the List 
        return redirect('/users');
    }

    
    public function show($id)
    {
        $user = User::find($id);

        return view('users.form',[
            'header' => 'Update User',
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update($request->all());

        
    }

    
    public function destroy($id)
    {
        //
    }
}
