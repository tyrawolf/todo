@extends('Todo.base')
@section('body')
<h1>To Do</h1>
<button onclick="location.href = '{{route('TodoNewForm')}}';">Add New</button>
    <a href="{{route('TodoIndex')}}">Unfinished To Do List</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($listtodo as $todos)
    <tr>
        <td>{{$todos->id}}</td>
        <td><a href="{{ route('TodoDetail',['id' => $todos->id]) }}">{{$todos->desc}}</a></td>
        <td><a href="{{ route('TodoDelete',['id' => $todos->id]) }}"onclick="return confirm('Are you sure?')">Delete</a> 
                    <a href="{{ route('TodoUpdate',['id' => $todos->id]) }}">Edit</a></td>
    </tr>
    @endforeach
    </table>
@endsection