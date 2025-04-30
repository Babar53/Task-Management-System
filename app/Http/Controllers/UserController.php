<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use DataTables;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
//    public function index()
//    {
//        $userWithRole = User::with('roles')->get();
//
//        return view('panel.users.index', compact('userWithRole'));
//    }

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = User::with('roles')->select('users.*'); // eager load roles

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('role', function ($row) {
                    $roles = $row->getRoleNames(); // Spatie method
                    return $roles->isNotEmpty() ? $roles->implode(', ') : 'No Role';
                })
                ->addColumn('action', function ($row) {
                    $editRoute = route('users.edit', $row->id);
                    $viewRoute = route('users.show', $row->id);
                    $deleteRoute = route('users.destroy', $row->id);
                    $viewBtn = '<a href="'.$viewRoute.'" class="view btn btn-primary btn-sm">View</a>';
                    $deleteBtn = '<a href="'.$deleteRoute.'" class="delete btn btn-danger btn-sm"  data-id="' . $row->id . '">Delete</a>';
                    $editBtn = '<a href="'.$editRoute.'" class="delete btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a>';
                    return $viewBtn . ' ' . $deleteBtn . ' ' . $editBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('panel.users.index');
    }

    public function create()
    {
        $pageTitle = 'Create User';
        $roles = Role::all();
//      return $roles;
        return view('panel.users.create', compact('roles', 'pageTitle'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'role'     => 'required|exists:roles,name',
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);
        $user->assignRole($validated['role']);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request ,$user_id)
    {

        $user = User::find($user_id);
        $user->update([
            'name'     => $request->name ?? $user->name,
            'email'    => $request->email ?? $user->email,
        ]);
        //delete all roles currently linked to this user
        DB::table('model_has_roles')->where('model_id',$user_id)->delete();
        //attach the new roles to the user
        $user->assignRole($request->role ?? $user->roles[0]->name);
        return redirect()->route('users.index')->with('success', 'User Updated successfully.');
    }

    public function edit($user_id)
    {
        $pageTitle = 'Edit User';
        $roles = Role::all();
        $user = User::with('roles')->findOrFail($user_id);
        $userRoles = $user->roles->pluck('id')->toArray();
//      return $user;
        return view('panel.users.edit', compact('roles', 'pageTitle', 'user', 'userRoles'));
    }

    public function show($user_id)
    {

        $pageTitle = 'View User';
        $roles = Role::all();
        $user = User::with('roles')->findOrFail($user_id);
        $userRoles = $user->roles->pluck('id')->toArray();
//      return $roles;
        return view('panel.users.view', compact('roles', 'pageTitle', 'user', 'userRoles'));
    }

    public function destroy($user_id)
    {

        DB::table('model_has_roles')->where('model_id',$user_id)->delete();
        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User Deleted successfully.');
//      return $roles;

    }
}
