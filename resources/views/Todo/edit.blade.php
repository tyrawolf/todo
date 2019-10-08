@extends('Todo.base')

@section('body')
    <form action="{{ route('TodoUpdate',['id'=>$todos->id]) }}" method="post">
        @csrf
        <div>
        <input type="hidden" name="id" value="{{$todos->id}}">
            <label>Description: </label>
            <input type="text" name="desc" class="tab" value="{{$todos->desc}}">
        </div>
        <div>
            <label>Status: </label>
            <input type="hidden" name="status" value="0">
            @if ($todos->status == 1)
            <input type="checkbox" value ="1" name = "status" class="tab" checked>Done<br><br>
            @else
            <input type="checkbox" value ="1" name = "status" class="tab">Done<br><br>
            @endif
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
@endsection