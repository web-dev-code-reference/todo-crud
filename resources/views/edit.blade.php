@extends('layout')
@section('content')

<!-- route('todo.update') -->



<form action="{{route('todo.update',['id'=>$todo->id]) }}" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label for="todo">Todo</label>
    <input type="text" class="form-control" id="todo" name="todo" value="{{$todo->todo}}">
  </div>
  <div class="form-group">
    <label for="email">category</label>
    <input type="number" class="form-control" id="category" name="category" value="{{$todo->category_id}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>


@stop()