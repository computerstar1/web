@extends('layout.app')
@section('content')
<div class="card">
  <h1> create new task</h1>
<div>
  <a style="margin: 19px;" class="btn btn-primary" href="/task/create">Create New Task</a>
</div>  
</div>
<div class="card mt-4 pt-4"> 
        <table class="table table-striped table-bordered table-hover table-sticky">
        <thead class="thead-dark">
          <tr>
              <th>Task ID</th>
              <th>Name</th>
              <th>Priority</th>
              <th width=20% colspan = 2>Actions</th>
              <th width="25%">timestamps</th>
          </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr data-index="'.$data['id'].'" data-position="'.$data['position'].'">
            <td>{{$task->id}}</td>
            <td><a href="/task/{{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->priority}}</td>
            <td><a href="/task/{{$task->id}}/edit" class="btn btn-primary">Edit</a></td>
           <td>
            <a>  
              {!!Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST'])!!} 
              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
              {{Form::hidden('_method', 'DELETE')}}    
              {!!Form::close()!!}
            </a>
           </td>
            <td><strong> created on {{$task->created_at}}</strong></td>
        </tr>  
      @endforeach
    </tbody>
    </table>      
    </div>
  <br>
<div class= "card">
  <div class="btText"> Copyright by ArdITi 2020. All rights reserved.</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>   
    <script type="text/javascript">
    $("tbody").sortable();  
    </script>
@endsection