@extends('layout')


@section('content')

 



 <!-- Nav tabs -->
 <ul class="nav nav-tabs">

    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1">Todo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Done</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div id="menu1" class="container tab-pane  active"><br>
      <h3>Menu 1</h3>
      <h1>List of Todo</h1>
        <button data-toggle="collapse" class="btn btn-primary" data-target="#todoadd">Add Record</button>
        <div id="todoadd" class="collapse">
            <form action="{{route('todo.add')}}" method="post">
                {{csrf_field()}}
            <div class="form-group">
                <label for="todo">Todo</label>
                <input type="text" class="form-control" id="todo" name="todo">
            </div>
            <div class="form-group">
                <label for="email">category</label>
                <input type="number" class="form-control" id="category" name="category">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>

                <th>ID</th>
                <th>Todo</th>
                <th>Category</th>
                <th>Completed</th>
                <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)

                
                    @if(!$todo->completed)
                    <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->todo }}</td>
                    <td>{{ $todo->category_id }}</td>
                    <td>{{ $todo->completed }}</td>
                    <td class="float-right">
                    <a href="{{route('todo.done',['id'=>$todo->id])}}" class="btn btn-success">Done</a>
                    <a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn btn-primary">Update</a>
                    <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger">Del</a>
                    </td>
                </tr>
                    @endif()


                @endforeach


            </tbody>
        </table>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <h3>Menu 2</h3>
        <table class="table table-striped">
            <thead>
                <tr>

                <th>ID</th>
                <th>Todo</th>
                <th>Category</th>
                <th>Completed</th>
                <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)

                    @if($todo->completed=1)
                
                    <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->todo }}</td>
                    <td>{{ $todo->category_id }}</td>
                    <td>{{ $todo->completed }}</td>
                    <td class="float-right">
                    <a href="{{route('todo.notdone',['id'=>$todo->id])}}" class="btn btn-success">Undone</a>
                    <a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn btn-primary">Update</a>
                    <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger">Del</a>
                    </td>
                </tr>
                    @endif()
                @endforeach
            </tbody>
        </table>
    </div>
  </div>


@stop()