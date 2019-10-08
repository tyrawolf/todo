@extends('Todo.base')

@section('body')
    <form action="{{ route('TodoCreate') }}" method="post">
        @csrf
        <div>
            <label>Description: </label>
            <input type="text" name="desc">
        </div>
        <div>
            <input type="submit" Value="Add">
        </div>
    </form>
@endsection