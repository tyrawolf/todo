<?php
    namespace App\Repository;
    use App\ToDo;

    interface ToDoInterface{
        public function create (string $desc, $status);
        public function all();
        public function get(int $id);
        public function update(int $id, string $desc, $status);
        public function delete(int $id);
    }
?>