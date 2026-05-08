@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Back Button --}}
    <div class="back-button">
        <a href="/tasks" class="btn-back">
            ← Back to Tasks
        </a>
    </div>

    {{-- Task Detail Card --}}
    <div class="task-detail-card" style="border-left: 6px solid {{ $task->color ?? '#4c35ff' }}">

        {{-- Header with Title and Actions --}}
        <div class="task-header">
            <h1>{{ $task->title }}</h1>
            <div class="action-buttons">
                <a href="/tasks/{{ $task->id }}/edit" class="btn-edit">
                    <i class="fas fa-edit"></i>  Edit
                </a>
                <form action="/tasks/{{ $task->id }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this task?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">
                       <i class="fas fa-trash"></i>  Delete
                    </button>
                </form>
            </div>
        </div>

        {{-- Description --}}
        <div class="detail-section">
            <label>📝 Description</label>
            <p>{{ $task->description ?? 'No description provided' }}</p>
        </div>

        {{-- Details Grid --}}
        <div class="details-grid">
            <div class="detail-item">
                <label>📅 Due Date</label>
                <p>{{ $task->due_date ?? 'Not set' }}</p>
            </div>

            <div class="detail-item">
                <label>⚡ Priority</label>
                <p class="priority-{{ strtolower($task->priority) }}">{{ $task->priority }}</p>
            </div>

            <div class="detail-item">
                <label>📊 Status</label>
                <p class="status-{{ strtolower(str_replace(' ', '-', $task->status)) }}">{{ $task->status }}</p>
            </div>

            <div class="detail-item">
                <label>🎨 Color</label>
                <p>
                    <span class="color-dot" style="background: {{ $task->color ?? '#4c35ff' }}"></span>
                    {{ $task->color ?? '#4c35ff' }}
                </p>
            </div>
        </div>

        {{-- Created/Updated Info --}}
        <div class="meta-info">
            <small>Created: {{ $task->created_at ? $task->created_at->format('M d, Y') : 'Unknown' }}</small>
            <small>Updated: {{ $task->updated_at ? $task->updated_at->diffForHumans() : 'Never' }}</small>
        </div>

    </div>

</div>

@endsection


<style>
.container {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    padding: 40px 30px;
    font-family: 'Segoe UI', system-ui, sans-serif;
}

/* Back Button */
.back-button {
    margin-bottom: 25px;
}

.btn-back {
    display: inline-block;
    padding: 10px 20px;
    background: #f0f0f0;
    color: #555;
    text-decoration: none;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.2s;
}

.btn-back:hover {
    background: #4c35ff;
    color: white;
    transform: translateX(-3px);
}

/* Task Detail Card */
.task-detail-card {
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

/* Header */
.task-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f0f0f0;
}

.task-header h1 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
    margin: 0;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 15px;
}

.btn-edit {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 24px;
    background: #4c35ff10;
    color: #4c35ff;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.2s;
    border: 1.5px solid #4c35ff30;
}

.btn-edit:hover {
    background: #4c35ff;
    color: white;
    transform: translateY(-2px);
}

.btn-delete {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 24px;
    background: #fee2e2;
    color: #c0392b;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-delete:hover {
    background: #fccaca;
    transform: translateY(-2px);
}

.delete-form {
    display: inline;
}

/* Detail Section */
.detail-section {
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f0f0f0;
}

.detail-section label {
    display: block;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    color: #888;
    margin-bottom: 12px;
}

.detail-section p {
    font-size: 18px;
    color: #333;
    line-height: 1.8;
    margin: 0;
}

/* Details Grid */
.details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f0f0f0;
}

.detail-item label {
    display: block;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    color: #888;
    margin-bottom: 12px;
}

.detail-item p {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
}

/* Priority Colors */
.priority-high {
    color: #c0392b;
    font-weight: 700;
    font-size: 20px;
}

.priority-medium {
    color: #e67e22;
    font-weight: 700;
    font-size: 20px;
}

.priority-low {
    color: #27ae60;
    font-weight: 700;
    font-size: 20px;
}

/* Status Colors */
.status-active {
    color: #1976d2;
    font-weight: 700;
    font-size: 20px;
}

.status-in-progress {
    color: #f57c00;
    font-weight: 700;
    font-size: 20px;
}

.status-completed {
    color: #388e3c;
    font-weight: 700;
    font-size: 20px;
}

.status-on-hold {
    color: #c2185b;
    font-weight: 700;
    font-size: 20px;
}

/* Color Dot */
.color-dot {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin-right: 10px;
    vertical-align: middle;
}

/* Meta Info */
.meta-info {
    display: flex;
    gap: 25px;
    padding-top: 15px;
    font-size: 14px;
    color: #aaa;
}

/* Responsive */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
    
    .task-detail-card {
        padding: 20px;
    }
    
    .task-header h1 {
        font-size: 28px;
    }
    
    .details-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .detail-item p {
        font-size: 18px;
    }
    
    .priority-high,
    .priority-medium,
    .priority-low,
    .status-active,
    .status-in-progress,
    .status-completed,
    .status-on-hold {
        font-size: 18px;
    }
}
</style>