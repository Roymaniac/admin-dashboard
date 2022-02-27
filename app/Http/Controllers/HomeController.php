<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Employee $model, Task $task)
    {
        return view('dashboard', ['employees' => $model->paginate(7)], ['tasks' => $task->paginate()]);
    }
}
