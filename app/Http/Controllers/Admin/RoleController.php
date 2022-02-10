<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Inertia\Inertia;


class RoleController extends Controller
{

    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $roles = Role::paginate($defaultPaginate);

        return Inertia::render('Role/Index', [
            'roles' => $roles
        ]);
    }


    public function create()
    {
        $permissions = Permission::all();

        return Inertia::render('Role/Create', [
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|min:3|max:255',
            'display_name' => 'required',
        ]);

        $role               = new Role();
        $role->name         = $request->name;
        $role->display_name = $request->display_name;
        $role->description  = $request->description;
        $res = $role->save();

        if ($res) {
            $permissionIDs = $request->permission_ids;
            $role->syncPermissions($permissionIDs);
        }

        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $checkedPermissions = $role->permissions()->pluck('id')->toArray();

        return Inertia::render('Role/Edit', [
            'role'               => $role,
            'permissions'        => $permissions,
            'checkedPermissions' => $checkedPermissions,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'display_name' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $res = $role->save();

        if ($res) {
            $pIDs = [];
            $permissionIDs = $request->permission_ids;

            foreach ($permissionIDs as $value) {
                if ($value) {
                    $pIDs[] = $value;
                }
            }
            $role->syncPermissions($pIDs);
        }

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        //
    }
}
