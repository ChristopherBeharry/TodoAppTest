@extends('layouts.app')


@section('content')
<h1>New Task</h1>
<!-- @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
@error('task')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@enderror
<form method="POST" action="/tasks">
    <div class="form-group">
        @csrf
        <label for="task">Task Description</label>
        <input class="form-control" name="task"/>
    </div><br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection
