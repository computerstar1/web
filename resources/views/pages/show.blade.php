@extends('layout.app')
@section('content')
<a href="/task" class="btn btn-primary">turn back</a>
<div class="container pt-2" >      
          <table class="table table-striped table-striped">
          <thead class="thead-dark">
           <tr>
                <th>Task ID</th>
                <th>Task Name</th>
                <th>Priority</th>
                <th>Timestap</th>
            </tr>
           </thead>
         <tbody>
         <tr>
            <td>{{$task->id}}
            <td>{{$task->name}}</td>
            <td>{{$task->priority}}</td>
            <td>
               <strong> created on {{$task->created_at}}</td>
            </td>
         </tr>
         <tbody>
         </table>
         
</div>
   
@endsection   