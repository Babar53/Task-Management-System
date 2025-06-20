<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $totalUsers = User::all()->count();
        $totalProjects = Project::all()->count();
        $user = Auth::user();
        $users = User::all();

        if (!$user) {
            return redirect()->route('login');
        }
        if ($user->hasRole('admin')) {
            return view('home' , compact('totalUsers', 'totalProjects', 'users'));
        }

        if ($user->hasRole('manager')) {
            return redirect()->route('dashboard.manager');
        }

        if ($user->hasRole('employee')) {
            return redirect()->route('dashboard.employee');
        }

    }

    public function dashboardEmployee()
    {
        $user = Auth::user();
//        assigned project to  user
        $users = User::all();
        $assignedProjects = $user->assignedProjects()->get()->count();

$pendingTasks =$user->tasks()->where('status' , 'todo')->get()->count();

        $completedTasks = $user->tasks()
            ->where('status',  'completed')
            ->count();
        $urgentTasks = $user->tasks()->where('status' ,'!=' , 'completed')->where('priority' , 'urgent')->count();

        return view('panel.dashboard.employee' , ['assignedProjects' => $assignedProjects , 'pendingTasks' => $pendingTasks , 'completedTasks' => $completedTasks ,'urgentTasks' => $urgentTasks , 'users' => $users]);

    }

    public function dashboardManager()
    {
        $user = Auth::user();
        $users = User::all();
        $assignedProjects = $user->assignedProjects()->get()->count();
        $pendingTasks = $user->tasks()->where('status', 'todo')->get()->count();
        $completedTasks = $user->tasks()->where('status', 'completed')->get()->count();
        $urgentTasks = $user->tasks()->where('status', '!=', 'completed')->where('priority', 'urgent')->get()->count(); // Get the count of urgent tasks

        return view('panel.dashboard.manager', ['assignedProjects' => $assignedProjects, 'pendingTasks' => $pendingTasks, 'completedTasks' => $completedTasks, 'urgentTasks' => $urgentTasks , 'users' => $users]);
    }
}
