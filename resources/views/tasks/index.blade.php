@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

@foreach ($tasks as $task)
    <div class="card @if($task->isCompleted()) border-success @endif">
        <div class="card-body">

            <p>
                {{ $task -> task }}
            </p>
            
            @if(!$task->isCompleted())
            <form action="/tasks/{{ $task->id }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" input="submit">Complete</button>
                </div>
            </form>
            @else
            <form action="/tasks/{{ $task->id }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger" input="submit">Delete</button>
                </div>
            </form>
            @endif

        </div>
    </div><br>
@endforeach
<div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary">New Task</a>
</div>
@endsection