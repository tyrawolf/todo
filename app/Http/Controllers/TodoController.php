<?php

namespace App\Http\Controllers;
use App\ToDo as ToDoModel;
use App\Repository\TodoInterface;
use App\Repository\TodoRepository;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $ToDoRepo;

    public function __construct(ToDoInterface $repo){
        $this->ToDoRepo = $repo;
    }

    public function index(){
        $listtodo = ToDoModel::all();
        return view('Todo.index',['listtodo'=>$listtodo]);
    }

    public function new_form(){
        return view('Todo.new');
    }

    public function finishedtodo(){
        $listtodo = $this->ToDoRepo->finished();
        return view('Todo.finished',['listtodo'=>$listtodo]);
    }

    public function detail($id){
        $todos = $this->ToDoRepo->get($id);
        return view('Todo.detail',['todos'=>$todos]);
    }
    
    public function edit(int $id){
        $todos = ToDoModel::findOrFail($id);
        return view('Todo.edit',['todos'=>$todos]);
    }

    public function update(Request $request){
        $this->ToDoRepo->update($request->id,$request->desc,$request->status);
        return redirect(route('TodoIndex'));
    }

    public function delete(int $id){
        $this->ToDoRepo->delete($id);
        return redirect(route('TodoIndex'));
    }

    function add(Request $request){
        $this->ToDoRepo->create($request->desc,0);
        return redirect()->route('TodoIndex');
    }
}
