<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'email_verified_at' => now()
        ]);

        return back()->withStatus(_('Created User Profile'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }



    /**
     * Update the user
     *
     * @param  \App\Http\Requests\UserRequest  $request
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id)->update($request->all());
        return redirect('user')->withStatus(_('User Info Updated'));
    }


    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('user')->withStatus(_('User Info Deleted'));
    }
}
