<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Task</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label>Task Title *</label>
                                <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label>Priority</label>
                                <select name="priority" class="form-control">
                                    <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
                                    <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                                    <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Due Date</label>
                                <input type="date" name="due_date" class="form-control" value="{{ $task->due_date }}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update Task</button>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
