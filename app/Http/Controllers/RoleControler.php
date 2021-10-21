<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use Illuminate\Http\Request;

class RoleControler extends Controller
{

    function create_role($name){

        $role = Role::create(['name' => $name]);

        return \response()->json($role);
    }

}
