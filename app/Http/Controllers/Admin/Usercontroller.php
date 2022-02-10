<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {
        $defaultPaginate = config('crud.paginate.size');
        $users           = User::paginate($defaultPaginate);

        return Inertia::render('User/Index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $roles = Role::all();
        return Inertia::render('User/Create', [
            'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|min:3|max:255',
            'email'            => 'required|email',
            'password'         => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        $user           = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            $userPermissionId = $request->roleId;
            $user->syncRoles([$userPermissionId]);
        }

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRoleIDs = $user->roles()->pluck('id')->toArray();

        $selectedRoleID = 0;
        if (count($userRoleIDs)) {
            $selectedRoleID = $userRoleIDs[0];
        }

        return Inertia::render('User/Edit', [
            'user' => $user,
            'roles' => $roles,
            'selectedRoleID' => $selectedRoleID
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $res = $user->save();

        if ($res) {
            $userPermissionId = $request->roleId;
            $user->syncRoles([$userPermissionId]);
        }

        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        return 'delete';
    }
}
