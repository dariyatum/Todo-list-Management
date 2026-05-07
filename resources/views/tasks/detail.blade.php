<!DOCTYPE html>
<html>
<head>
    <title>{{ $task->title }} - Task Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px;
            font-family: Arial, sans-serif;
        }
        .detail-card {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .detail-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
        }
        .detail-body {
            padding: 30px;
        }
        .info-row {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .label {
            font-weight: bold;
            color: #666;
            margin-bottom: 5px;
            font-size: 12px;
            text-transform: uppercase;
        }
        .value {
            font-size: 16px;
            color: #333;
        }
        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-completed {
            background: #28a745;
            color: white;
        }
        .badge-pending {
            background: #ffc107;
            color: #333;
        }
        .badge-high {
            background: #dc3545;
            color: white;
        }
        .badge-medium {
            background: #ffc107;
            color: #333;
        }
        .badge-low {
            background: #28a745;
            color: white;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-primary { background: #667eea; color: white; }
        .btn-success { background: #28a745; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn:hover { opacity: 0.8; transform: translateY(-1px); }
    </style>
</head>
<body>
    <div class="detail-card">
        <div class="detail-header">
            <h2>
                <i class="fas fa-tasks"></i> 
                Task Details
            </h2>
        </div>
        
        <div class="detail-body">
            <!-- Title -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-heading"></i> Title
                </div>
                <div class="value">
                    <strong>{{ $task->title }}</strong>
                </div>
            </div>
            
            <!-- Status -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-flag-checkered"></i> Status
                </div>
                <div class="value">
                    @if($task->status == 'completed')
                        <span class="badge badge-completed">
                            <i class="fas fa-check-circle"></i> Completed
                        </span>
                    @else
                        <span class="badge badge-pending">
                            <i class="fas fa-clock"></i> Pending
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- Priority -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-flag"></i> Priority
                </div>
                <div class="value">
                    @if($task->priority == 'high')
                        <span class="badge badge-high">
                            <i class="fas fa-arrow-up"></i> High Priority
                        </span>
                    @elseif($task->priority == 'medium')
                        <span class="badge badge-medium">
                            <i class="fas fa-minus"></i> Medium Priority
                        </span>
                    @else
                        <span class="badge badge-low">
                            <i class="fas fa-arrow-down"></i> Low Priority
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- Description -->
            @if($task->description)
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-align-left"></i> Description
                </div>
                <div class="value">
                    {{ $task->description }}
                </div>
            </div>
            @endif
            
            <!-- Due Date -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-calendar"></i> Due Date
                </div>
                <div class="value">
                    @if($task->due_date)
                        {{ date('F d, Y', strtotime($task->due_date)) }}
                        @if(strtotime($task->due_date) < time() && $task->status == 'pending')
                            <span class="badge badge-danger" style="background: #dc3545; margin-left: 10px;">
                                Overdue!
                            </span>
                        @endif
                    @else
                        No due date set
                    @endif
                </div>
            </div>
            
            <!-- Created Date -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-calendar-plus"></i> Created
                </div>
                <div class="value">
                    {{ $task->created_at->format('F d, Y h:i A') }}
                </div>
            </div>
            
            <!-- Last Updated -->
            <div class="info-row">
                <div class="label">
                    <i class="fas fa-edit"></i> Last Updated
                </div>
                <div class="value">
                    {{ $task->updated_at->diffForHumans() }}
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="btn-group">
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                
                <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        <i class="fas {{ $task->status == 'pending' ? 'fa-check' : 'fa-undo' }}"></i>
                        {{ $task->status == 'pending' ? 'Mark Complete' : 'Mark Pending' }}
                    </button>
                </form>
                
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" 
                      onsubmit="return confirm('Delete this task forever?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>