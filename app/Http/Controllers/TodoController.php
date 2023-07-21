<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function  getTodo(){
        $todo = ToDoList::get();
        return view('/todolist',['alltodo'=>$todo]);
    }

    public function insertTodo(Request $request){
        $todo = new ToDoList();
        $todo->fill($request->all());
        $todo->save();
        return redirect('todolist');
    }

    public function deleteTodo(Request $request){
        $todo = ToDoList::find($request->id);
        $todo->delete();
        return redirect('todolist');
    }

    public function getTodoData(Request $request){
        $todo = ToDoList::find($request->id);
        return view('todolist_update',['title'=>$todo->title,'description'=>$todo->description,'name'=>$todo->name,'id'=>$todo->id]);
    }

    public function updateTodoData(Request $request,$id){
        $todo = ToDoList::find($request->id);
        $todo->fill($request->all());
        $todo->save();
        return redirect('todolist');
    }

}
