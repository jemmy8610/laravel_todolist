@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">task</h1>

    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif


      <form method="post" action="{{ route('task.store') }}">
        @csrf
        <br>
        <div class="form-row align-items-center">
          <div class="col-7">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input type="text" class="form-control mb-2" name="task" placeholder="Enter a task">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </div>
        </div>
    </div>


    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID/Task </td>
          <td></td>

        </tr>
      </thead>
      <tbody>
        @foreach($task as $task)
        @if ($task->done==0)
        <tr>
          <td width="70%">{{$task->id}}. {{$task->task}}</td>
          <td>
            <div class="float-right">
              <a href="{{ route('task.edit',$task->id)}}" class="btn btn-primary">done</a>
              <a href="{{ route('task.destroy', $task->id)}}" class="btn btn-danger">Delete</a>
            </div><br>
          </td>
        </tr>
        @else
        <tr>
          <td width="70%"><del>{{$task->id}}.  {{$task->task}}</del></td>
          <td>
            <div class="float-right">
              <a href="{{ route('task.destroy', $task->id)}}" class="btn btn-danger">Delete</a>
            </div><br>
          </td>
        </tr>



        @endif
        @endforeach
      </tbody>
    </table>
    <div>
    </div>
    @endsection