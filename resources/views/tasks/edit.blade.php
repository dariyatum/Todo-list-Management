@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $task->title }}">

        <textarea name="description">{{ $task->description }}</textarea>

        <input type="date" name="due_date" value="{{ $task->due_date }}">

        <select name="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>
        </select>

        <select name="priority">

            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>
                Low
            </option>

            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>
                Medium
            </option>

            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>
                High
            </option>

        </select>

        <button type="submit">
            Update Task
        </button>

    </form>

</div>

@endsection