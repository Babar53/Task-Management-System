<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

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

                    $viewBtn = '<a href="'.$viewRoute.'" class="view text-success" title="View" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-eye"></i></a>';
                    $editBtn = '<a href="'.$editRoute.'" class="edit " title="Edit" style="margin: 5px; font-size: 1.2em;"><i class="fas fa-edit"></i></a>';
                    $deleteBtn = '<a href="'.$deleteRoute.'" class="delete text-danger" title="Delete" style="margin:  5px; font-size: 1.2em;" onclick="return confirm(\'Are you sure you want to delete this user?\')"><i class="fas fa-trash-alt"></i></a>';

                    return '<div class="d-flex justify-content-center" style="gap: 10px;">' . $viewBtn . $editBtn . $deleteBtn . '</div>';
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
