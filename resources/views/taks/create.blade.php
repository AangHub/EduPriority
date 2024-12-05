@extends('layouts.app')

@section('content')
<h1>Add New Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="task_name" class="form-label">Task Name</label>
        <input type="text" name="task_name" id="task_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deadline" class="form-label">Deadline</label>
        <input type="datetime-local" name="deadline" id="deadline" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="priority" class="form-label">Priority</label>
        <select name="priority" id="priority" class="form-select" required>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
