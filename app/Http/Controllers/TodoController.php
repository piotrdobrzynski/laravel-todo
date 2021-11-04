<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
      $todos = Todo::all();
      return view('todo.index')->with(['todos' => $todos]);
    }

    public function upload(Request $request){
      Todo::create(['title' => $request->title]);
      return redirect('/index')->withSuccess('Task added successfully');
    }

    public function update(Request $request){
      $todo = Todo::find($request->id);
      $todo->update(['title' => $request->title]);
      return redirect('/index')->withSuccess('Task updated successfully');
    }

    public function edit($id){
      $title = Todo::find($id)->title;
      return view('todo.edit')->with(['title' => $title, 'id' => $id]);
    }

    public function change($id){
      $todo = Todo::find($id);
      $title = $todo->title;
      if ($todo->completed){
          $todo->update(['completed' => false]);
          return redirect('/index')->withSuccess("Task {$title} uncompleted");
      }else{
          $todo->update(['completed' => true]);
          return redirect('/index')->withSuccess("Task {$title} completed");
      }

    }
}
