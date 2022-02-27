<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index(Task $task)
    {
        return view('tasks.index',  ['tasks' => $task->paginate()]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request['title'],
            'description' => $request['description']
        ]);
        return redirect('task')->withStatus(_('Task Created'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id)->update($request->all());
        return redirect('task')->withStatus(_('Task Updated'));
    }

    public function destroy($id)
    {
        $task = Task::find($id)->delete();
        return redirect('task')->withStatus(_('Task Deleted'));
    }
}
