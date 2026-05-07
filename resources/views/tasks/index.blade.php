<!DOCTYPE html>
<html>
<head>
    <title>My Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>My Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Task
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Search and Filter Bar -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="GET" action="{{ route('tasks.index') }}" class="row g-3">
                    <div class="col-md-5">
                        <label class="form-label">Search</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" 
                                   name="search" 
                                   class="form-control" 
                                   placeholder="Search by title or description..."
                                   value="{{ request('search') }}">
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>
                    
                    <div class="col-md-3">
                        <label class="form-label">Priority</label>
                        <select name="priority" class="form-control">
                            <option value="all" {{ request('priority') == 'all' ? 'selected' : '' }}>All</option>
                            <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
                            <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                    
                    <div class="col-md-1">
                        <label class="form-label">&nbsp;</label>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                </form>
                
                <!-- Clear filters link -->
                @if(request('search') || request('status') || request('priority'))
                    <div class="mt-3">
                        <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-times"></i> Clear Filters
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Results count -->
        <p class="text-muted mb-3">Found {{ $tasks->count() }} task(s)</p>

        <div class="row">
            @forelse($tasks as $task)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $task->title }}
                                @if($task->status == 'completed')
                                    <span class="badge bg-success">Completed</span>
                                @else
                                    <span class="badge bg-warning">Pending</span>
                                @endif
                            </h5>
                            <p class="card-text">{{ Str::limit($task->description, 100) }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="fas fa-flag"></i> Priority: 
                                    <span class="badge bg-{{ $task->priority == 'high' ? 'danger' : ($task->priority == 'medium' ? 'warning' : 'success') }}">
                                        {{ ucfirst($task->priority) }}
                                    </span>
                                    |
                                    <i class="fas fa-calendar"></i> Due: {{ $task->formatted_due_date_time }}
                                </small>
                            </p>
                            <div class="btn-group">
                                <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <i class="fas {{ $task->status == 'pending' ? 'fa-check' : 'fa-undo' }}"></i>
                                        {{ $task->status == 'pending' ? 'Complete' : 'Undo' }}
                                    </button>
                                </form>
                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this task?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <i class="fas fa-inbox fa-3x mb-3"></i>
                        <p>No tasks found. 
                           @if(request('search') || request('status') || request('priority'))
                               Try clearing your filters or 
                           @endif
                           <a href="{{ route('tasks.create') }}">create a new task</a>!
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
