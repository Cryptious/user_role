<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
      $users = User::all();
      return view('users.index', compact('users'));
    }
    public function edit(User $user){

      return view('users.edit', compact('user'));
    }

    public function store(){

      $attributes = request()->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'min:3', 'email'],
        'password' => ['required', 'min:8']
      ]);


      User::create($attributes);

      return redirect('/users');
    }

    public function update(User $user){

      $user->update(request(['name','email']));

      return redirect('/users');
    }

    public function destroy(User $user){
      $user->delete();
      return redirect('/users');

    }
}
