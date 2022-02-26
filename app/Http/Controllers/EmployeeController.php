<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    /**
     * 
     *
     * @param  \App\Models\Employee  $model
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('employee.create');
    }


    public function store(EmployeeRequest $request) {

        return Employee::create($request);

        return back()->withStatus(_("Employee Data Created"));
    }
}
