@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ $task->title }}</h1>

    <p>{{ $task->description }}</p>

    <p>Due Date: {{ $task->due_date }}</p>

    <p>Status: {{ $task->status }}</p>

    <p>Priority: {{ $task->priority }}</p>

</div>

@endsection