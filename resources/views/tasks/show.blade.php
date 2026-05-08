{{-- resources/views/tasks/show.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="task-detail-wrapper">

    {{-- BACK BUTTON --}}
    <div class="back-navigation">
        <a href="{{ route('tasks.index') }}" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i> Back to Tasks
        </a>
    </div>

    {{-- TASK DETAIL CARD --}}
    <div class="detail-card" style="border-top: 8px solid {{ $task->color ?? '#4c35ff' }}">

        {{-- HEADER WITH ACTIONS --}}
        <div class="detail-header">
            <div class="title-section">
                <h1>{{ $task->title }}</h1>
                <span class="task-id">#{{ $task->id }}</span>
            </div>
            <div class="action-buttons">
                <a href="{{ route('tasks.edit', $task->id) }}" class="edit-action-btn">
                    <i class="fa-regular fa-pen-to-square"></i> Edit
                </a>
                <button class="delete-action-btn" onclick="deleteTask({{ $task->id }})">
                    <i class="fa-regular fa-trash-can"></i> Delete
                </button>
            </div>
        </div>

        {{-- TASK METADATA GRID --}}
        <div class="info-grid">

            {{-- DESCRIPTION --}}
            <div class="info-card full-width">
                <div class="info-label">
                    <i class="fa-solid fa-align-left"></i> Description
                </div>
                <div class="info-value description-text">
                    {{ $task->description ?? 'No description provided' }}
                </div>
            </div>

            {{-- DUE DATE --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-regular fa-calendar"></i> Due Date
                </div>
                <div class="info-value due-date-value">
                    {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('F j, Y') : 'Not set' }}
                    @if($task->due_date && \Carbon\Carbon::parse($task->due_date)->isPast() && $task->status != 'Completed')
                        <span class="overdue-badge">Overdue</span>
                    @endif
                </div>
            </div>

            {{-- PRIORITY --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-solid fa-flag"></i> Priority
                </div>
                <div class="info-value">
                    <span class="priority-badge priority-{{ strtolower($task->priority) }}">
                        {{ $task->priority }}
                    </span>
                </div>
            </div>

            {{-- STATUS --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-solid fa-chart-simple"></i> Status
                </div>
                <div class="info-value">
                    <span class="status-badge status-{{ strtolower(str_replace(' ', '-', $task->status)) }}">
                        {{ $task->status }}
                    </span>
                </div>
            </div>

            {{-- COLOR --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-solid fa-palette"></i> Color
                </div>
                <div class="info-value">
                    <div class="color-preview">
                        <div class="color-circle" style="background: {{ $task->color ?? '#4c35ff' }}"></div>
                        <span>{{ $task->color ?? '#4c35ff' }}</span>
                    </div>
                </div>
            </div>

            {{-- CREATED AT --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-regular fa-clock"></i> Created
                </div>
                <div class="info-value">
                    {{ $task->created_at ? \Carbon\Carbon::parse($task->created_at)->format('M j, Y g:i A') : 'Unknown' }}
                </div>
            </div>

            {{-- UPDATED AT --}}
            <div class="info-card">
                <div class="info-label">
                    <i class="fa-solid fa-pen"></i> Last Updated
                </div>
                <div class="info-value">
                    {{ $task->updated_at ? \Carbon\Carbon::parse($task->updated_at)->diffForHumans() : 'Never' }}
                </div>
            </div>

        </div>

        {{-- QUICK ACTIONS --}}
        <div class="quick-actions">
            <h4>Quick Actions</h4>
            <div class="action-buttons-group">
                <button onclick="updateStatus({{ $task->id }}, 'Active')" class="quick-btn {{ $task->status == 'Active' ? 'active' : '' }}">
                    <i class="fa-solid fa-play"></i> Active
                </button>
                <button onclick="updateStatus({{ $task->id }}, 'In Progress')" class="quick-btn {{ $task->status == 'In Progress' ? 'active' : '' }}">
                    <i class="fa-solid fa-spinner"></i> In Progress
                </button>
                <button onclick="updateStatus({{ $task->id }}, 'Completed')" class="quick-btn {{ $task->status == 'Completed' ? 'active' : '' }}">
                    <i class="fa-solid fa-check"></i> Completed
                </button>
                <button onclick="updateStatus({{ $task->id }}, 'On Hold')" class="quick-btn {{ $task->status == 'On Hold' ? 'active' : '' }}">
                    <i class="fa-solid fa-pause"></i> On Hold
                </button>
            </div>
        </div>

    </div>

</div>

@endsection

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

.task-detail-wrapper {
    padding: 40px;
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Inter', sans-serif;
}

/* BACK BUTTON */
.back-navigation {
    margin-bottom: 24px;
}

.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 12px;
    color: #555;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s;
}

.back-btn:hover {
    background: #4c35ff;
    color: white;
    border-color: #4c35ff;
    transform: translateX(-3px);
}

/* DETAIL CARD */
.detail-card {
    background: white;
    border-radius: 28px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    padding: 32px;
}

/* HEADER */
.detail-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 32px;
    padding-bottom: 24px;
    border-bottom: 2px solid #f0f0f0;
}

.title-section h1 {
    font-size: 32px;
    font-weight: 700;
    color: #222;
    margin-bottom: 8px;
}

.task-id {
    font-size: 13px;
    color: #999;
    font-family: monospace;
}

.action-buttons {
    display: flex;
    gap: 12px;
}

.edit-action-btn, .delete-action-btn {
    padding: 10px 20px;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

.edit-action-btn {
    background: #4c35ff10;
    color: #4c35ff;
    border: 1px solid #4c35ff30;
}

.edit-action-btn:hover {
    background: #4c35ff;
    color: white;
    transform: translateY(-2px);
}

.delete-action-btn {
    background: #fee2e2;
    color: #c0392b;
    border: 1px solid #fccaca;
}

.delete-action-btn:hover {
    background: #fccaca;
    transform: translateY(-2px);
}

/* INFO GRID */
.info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-bottom: 32px;
}

.info-card {
    background: #fafbfc;
    border-radius: 20px;
    padding: 20px;
    border: 1px solid #eef2f8;
}

.info-card.full-width {
    grid-column: span 2;
}

.info-label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    color: #5f7f9e;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-label i {
    font-size: 14px;
}

.info-value {
    font-size: 16px;
    font-weight: 500;
    color: #1a2c3e;
}

.description-text {
    line-height: 1.6;
    white-space: pre-wrap;
    word-break: break-word;
}

.due-date-value {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.overdue-badge {
    background: #fee2e2;
    color: #c0392b;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

/* PRIORITY BADGES */
.priority-badge {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 14px;
}

.priority-high {
    background: #fee2e2;
    color: #c0392b;
}

.priority-medium {
    background: #fff4e6;
    color: #e67e22;
}

.priority-low {
    background: #e8f8f0;
    color: #27ae60;
}

/* STATUS BADGES */
.status-badge {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 14px;
}

.status-active {
    background: #e3f2fd;
    color: #1976d2;
}

.status-in-progress {
    background: #fff3e0;
    color: #f57c00;
}

.status-completed {
    background: #e8f5e9;
    color: #388e3c;
}

.status-on-hold {
    background: #fce4ec;
    color: #c2185b;
}

/* COLOR PREVIEW */
.color-preview {
    display: flex;
    align-items: center;
    gap: 12px;
}

.color-circle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 2px solid white;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

/* QUICK ACTIONS */
.quick-actions {
    background: #f8f9fc;
    border-radius: 20px;
    padding: 24px;
    margin-top: 16px;
    border: 1px solid #eef2f8;
}

.quick-actions h4 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 16px;
    color: #333;
}

.action-buttons-group {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.quick-btn {
    padding: 10px 20px;
    border-radius: 40px;
    background: white;
    border: 1px solid #ddd;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.quick-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.quick-btn.active {
    background: #4c35ff;
    color: white;
    border-color: #4c35ff;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .task-detail-wrapper {
        padding: 20px;
    }
    
    .detail-card {
        padding: 20px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .info-card.full-width {
        grid-column: span 1;
    }
    
    .title-section h1 {
        font-size: 24px;
    }
    
    .detail-header {
        flex-direction: column;
    }
}
</style>

<script>
// Delete task function
function deleteTask(taskId) {
    if (confirm('⚠️ Are you sure you want to delete this task?')) {
        fetch(`/tasks/${taskId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = '{{ route("tasks.index") }}';
            } else {
                alert('Error deleting task');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred');
        });
    }
}

// Update status function
function updateStatus(taskId, status) {
    fetch(`/tasks/${taskId}/status`, {
        method: 'PATCH',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ status: status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('Error updating status');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred');
    });
}
</script>