@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task->task_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="task_name" class="form-label">Task Name</label>
        <input type="text" name="task_name" id="task_name" class="form-control" value="{{ $task->task_name }}" required>
    </div>
    <div class="mb-3">
        <label for="deadline" class="form-label">Deadline</label>
        <input type="datetime-local" name="deadline" id="deadline" class="form-control" value="{{ $task->deadline }}" required>
    </div>
    <div class="mb-3">
        <label for="priority" class="form-label">Priority</label>
        <select name="priority" id="priority" class="form-select" required>
            <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
            <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
            <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
