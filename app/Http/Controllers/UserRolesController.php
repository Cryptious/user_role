<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\RoleName;
use App\UserRole;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
  public function index(){

//     SELECT user_roles.id, users.name, role_names.role
//     from user_roles
//     inner join users on user_roles.user_id = users.id
//     inner join role_names on user_roles.role_id = role_names.id

    $userroles = DB::table('user_roles')->join('users','user_roles.user_id','=','users.id')->join('role_names','user_roles.role_id','=','role_names.id')->select('user_roles.*','users.name','role_names.role')->get();

    $users = User::all();
    $rolenames = Rolename::all();
    // $userroles = UserRole::all();
    return view('userroles.index', compact('userroles','users','rolenames'));

  }
}
