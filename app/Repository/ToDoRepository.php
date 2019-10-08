<?php
    namespace App\Repository;

    use App\ToDo;

    class ToDoRepository implements ToDoInterface
    {
        public function create(string $desc, $status)
        {
            $newTodo = new ToDo;
            $newTodo->desc =$desc;
            $newTodo->status=$status;
            $newTodo->save();
        }
        public function all()
        {
            return ToDo::all();
        }
        public function get($id)
        {
            return ToDo::findOrFail($id);
        }
        public function update(int $id, string $desc,$status)
        {
            ToDo::findOrFail($id)->update(['desc'=>$desc,'status'=>$status]);
        }
        public function delete(int $id)
        {
            $newTodo = ToDo::find($id);
            $newTodo->delete();
        }
        public function finished()
        {
            return ToDo::all()->where('status', 1);
        }
        function unfinished(){
            return ToDo::all()->where('status',0);
        }
    }
?>