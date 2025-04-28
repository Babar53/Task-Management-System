<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use DataTables;
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
                ->addColumn('role', function($row) {
                    $roles = $row->getRoleNames(); // Spatie method
                    return $roles->isNotEmpty() ? $roles->implode(', ') : 'No Role';
                })
                ->addColumn('action', function($row){
                    $viewBtn = '<a href="javascript:void(0)" class="view btn btn-primary btn-sm">View</a>';
                    $deleteBtn = '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$row->id.'">Delete</a>';
                    $editBtn = '<a href="javascript:void(0)" class="delete btn btn-success btn-sm" data-id="'.$row->id.'">Edit</a>';
                    return $viewBtn . ' ' . $deleteBtn . ' ' . $editBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('panel.users.index');
    }
}
