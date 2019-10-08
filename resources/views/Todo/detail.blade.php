@extends('Todo.base')

@section('body')
<dl>
    <dt>Description</dt>
    <dd class="tab">{{$todos->desc}}</dd>
    <dt>Status</dt>
    @if ($todos->status == 1)
        <dd class="tab">Done</dd>
    @else 
        <dd class="tab">On Progress</dd>
    @endif
</dl>
@endsection