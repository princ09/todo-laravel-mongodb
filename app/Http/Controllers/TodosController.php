<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodosController extends Controller
{
    //
    public function index(){
        return view('todos.index',['todos'=>Todo::all()]);
    }
    public function show($todoName){
        return view('todos.show',['todo'=>Todo::where('name',$todoName)->take(1)->get()]);
    }
    public function create()
    {
      return view('todos.create');
    }
    public function store()
    {
      $data = request()->all();

      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['desc'];
      $todo->completed = false;

      $todo->save();

      return redirect('/todos');
    }
}
