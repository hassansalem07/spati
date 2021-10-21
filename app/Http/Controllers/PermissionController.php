<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;

class PermissionController extends Controller
{

    function create_permission($name){

            $permission = Permission::create(['name' => $name]);

            return \response()->json($permission);

    }

    function assign_role_to_permission($permission ,$role_id){

        $role = Role::find($role_id);
        $permission = Permission::where("name" ,$permission )->first();
        $permission->assignRole($role);
        return \response()->json($role->permission);

}



}
