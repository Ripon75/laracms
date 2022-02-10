<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use Inertia\Inertia;

class PermissionController extends Controller
{

    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $permissions = Permission::paginate($defaultPaginate);

        return Inertia::render('Permission/Index', [
            'permissions' => $permissions
        ]);
    }

    public function create()
    {
        return Inertia::render('Permission/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|min:3|max:255',
            'display_name' => 'required',
        ]);

        $permission               = new Permission();
        $permission->name         = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description  = $request->description;
        $permission->save();

        return redirect()->route('permissions.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $permission = Permission::find($id);

        return Inertia::render('Permission/Edit', [
            'permission' => $permission
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'display_name' => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        return redirect()->route('permissions.index');
    }

    public function destroy($id)
    {
        //
    }
}
