<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TodosController extends Controller{

    public function list(){
        $todos  = Todos::all();
        return response()->json($todos);
    }

    public function saveTodo(Request $request){
        $todo = Todos::create($request->all());
        return response()->json($todo);
    }

    public function markAsDone($id){
        $todo  = Todos::find($id);
        if($todo){
            $todo->termine = 1;
            $todo->save();
            return response()->json("success");
        }else{
            return response()->json("error");
        }
    }

    public function deleteTodo($id){
        $todo  = Todos::find($id);
        if($todo && $todo->termine){
            $todo->delete();
            return response()->json('success');
        }else{
            return response()->json('error');
        }
}
}
