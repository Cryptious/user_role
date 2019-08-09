<?php

namespace App\Http\Controllers;

use App\RoleName;
use Illuminate\Http\Request;

class RoleNamesController extends Controller
{
    public function index(){
      $rolenames = Rolename::all();
      return view('rolenames.index', compact('rolenames'));
    }

    public function edit(RoleName $rolename){
      return view('rolenames.edit', compact('rolename'));
    }

    public function store(){

      $attributes = request()->validate([
        'role' => ['required', 'min:3'],
      ]);


      Rolename::create($attributes);

      return redirect('/rolenames');
    }

    public function update(RoleName $rolename){

      $rolename->update(request(['role']));

      return redirect('/rolenames');
    }

    public function destroy(RoleName $rolename){
      $rolename->delete();
      return redirect('/rolenames');

    }

}
