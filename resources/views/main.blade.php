<?php

use App\Http\Controllers\TaskController;

$taskList = TaskController::GetTaskList();

?>
@extends('master')

@section('content')

<section class="vh-100">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
            <div class="card-body py-4 px-4 px-md-5">
  
              <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                <i class="fas fa-check-square me-1"></i>
                 My Todo List
              </p>
              
              <form action="newlist" method="POST">
                @csrf

                <div class="pb-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="align-items-center">
                          <input type="text" class="mt-2" name="title" placeholder="Title...">

                          <input type="text" class="form-control form-control-lg mt-2 " name="content" placeholder="Task description..." maxlength="2500">

                          <div>
                            <button type="submit" class="btn btn-primary mt-2">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
              
  
              <hr class="my-4">

  
                <table class="table">
                    <thead>

                    </thead>

                    <tbody>
                        @if($taskList != null)

                        @foreach($taskList as $task)

                        <tr>
                            <td >
                                <h3 >{{$task->title}}</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                {{$task->content}}
                            </td>

                            <td>
                                <form action="deletetask" method="POST" class="d-flex justify-content-end">
                                    @csrf
                                    <input type="hidden" name="taskId" value="{{$task->id}}">
                                    <input type="submit" value="DELETE" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>

                        @endforeach

                        @endif
                    </tbody>
                </table>


  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection