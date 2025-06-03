<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Roles';
        if($request->ajax()){
            $roles = Role::all();
            return datatables()->of($roles)
                ->addIndexColumn()
                ->addColumn('permissions', function ($role) {
                    $permissions = $role->permissions->pluck('name')->implode(', ');
                    return $permissions;
                })
                ->addColumn('action', function ($role) {
                    $editRoute = route('roles.edit', $role->id);
                    $deleteRoute = route('roles.destroy', $role->id);
                    $viewRoute = route('roles.show', $role->id);

                    $viewBtn = '<a href="'.$viewRoute.'" class="view btn btn-primary btn-sm">View</a>';
                    $deleteBtn = '<a href="'.$deleteRoute.'" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this role?\')"  data-id="' . $role->id . '">Delete</a>';
                    $editBtn = '<a href="'.$editRoute.'" class="delete btn btn-success btn-sm" data-id="' . $role->id . '">Edit</a>';
                    return $viewBtn . ' ' . $deleteBtn . ' ' . $editBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('panel.roles.index' , compact('title'));
    }

    public function create()
    {
        $title = 'Create Role';
        $permissions = Permission::all();
        return view('panel.roles.create', compact('title', 'permissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255|unique:roles,name',
            'permissions' => 'required|array|min:1',
        ]);
        $role = Role::create(['name' => $validated['name']]);
        $role->syncPermissions($validated['permissions']);
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function edit($id)
    {
        $title = 'Edit Role';
        $role = Role::find($id);
        $permissions = Permission::all();
        return view('panel.roles.edit', compact('title', 'role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255|unique:roles,name,'.$id,
            'permissions' => 'required|array|min:1',
        ]);
        $role = Role::find($id);
        $role->update(['name' => $validated['name']]);
        $role->syncPermissions($validated['permissions']);
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }

    public function show($id)
    {
        $title = 'View Role';
        $permissions = Permission::all();
        $role = Role::find($id);
        return view('panel.roles.view', compact('role', 'title', 'permissions'));
    }
}
