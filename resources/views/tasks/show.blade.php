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
    <div class="task-detail-card" style="border-left: 6px solid">

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

body{
    background:linear-gradient(135deg,#eef2ff,#fdf2f8);
    font-family:'Segoe UI',system-ui,sans-serif;
}

/* CONTAINER */
.container{
    max-width:1300px;
    margin:0 auto;
    padding:40px 30px;
}

/* BACK BUTTON */
.back-button{
    margin-bottom:35px;
}

.btn-back{
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:#6c63ff;
    font-size:15px;
    font-weight:700;
    transition:0.25s;
}

.btn-back:hover{
    transform:translateX(-4px);
    color:#4f46e5;
}

/* MAIN CARD */
.task-detail-card{
    padding:10px 0;
    background:transparent;
    border-left:none !important;
    box-shadow:none;
}

/* HEADER */
.task-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
    margin-bottom:40px;
}

.task-header h1{
    font-size:56px;
    font-weight:800;
    margin:0;
    color:#1e1b4b;
    line-height:1.2;
}

/* ACTION BUTTONS */
.action-buttons{
    display:flex;
    gap:14px;
    flex-wrap:wrap;
}

.btn-edit{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:12px 22px;
    border-radius:14px;
    text-decoration:none;
    font-size:15px;
    font-weight:700;
    background:white;
    color:#6c63ff;
    border:1px solid #ddd6fe;
    transition:0.25s;
}

.btn-edit:hover{
    background:#6c63ff;
    color:white;
    transform:translateY(-2px);
}

.btn-delete{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:12px 22px;
    border:none;
    border-radius:14px;
    font-size:15px;
    font-weight:700;
    background:#fee2e2;
    color:#dc2626;
    cursor:pointer;
    transition:0.25s;
}

.btn-delete:hover{
    background:#fecaca;
    transform:translateY(-2px);
}

.delete-form{
    display:inline;
}

/* DESCRIPTION */
.detail-section{
    margin-bottom:50px;
}

.detail-section label{
    display:block;
    font-size:13px;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:1px;
    color:#8b5cf6;
    margin-bottom:14px;
}

.detail-section p{
    margin:0;
    font-size:20px;
    line-height:1.9;
    color:#4b5563;
    max-width:800px;
}

/* DETAILS GRID */
.details-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:40px;
}

/* DETAIL ITEM */
.detail-item{
    background:white;
    padding:24px;
    border-radius:22px;
    box-shadow:0 8px 24px rgba(0,0,0,0.05);
    transition:0.25s;
}

.detail-item:hover{
    transform:translateY(-4px);
}

.detail-item label{
    display:block;
    font-size:13px;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:1px;
    color:#9ca3af;
    margin-bottom:14px;
}

.detail-item p{
    margin:0;
    font-size:18px;
    font-weight:700;
    display:flex;
    align-items:center;
    gap:10px;
}

/* PRIORITY */
.priority-high{
    color:#ef4444;
}

.priority-medium{
    color:#f59e0b;
}

.priority-low{
    color:#22c55e;
}

/* STATUS */
.status-active,
.status-in-progress{
    background:#fef3c7;
    color:#d97706;
    padding:10px 16px;
    border-radius:999px;
    width:fit-content;
    font-size:14px !important;
}

.status-completed{
    background:#dcfce7;
    color:#16a34a;
    padding:10px 16px;
    border-radius:999px;
    width:fit-content;
    font-size:14px !important;
}

.status-on-hold{
    background:#fee2e2;
    color:#dc2626;
    padding:10px 16px;
    border-radius:999px;
    width:fit-content;
    font-size:14px !important;
}

/* COLOR DOT */
.color-dot{
    width:16px;
    height:16px;
    border-radius:50%;
    display:inline-block;
    box-shadow:0 0 10px rgba(0,0,0,0.15);
}

/* META INFO */
.meta-info{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

.meta-info small{
    background:white;
    padding:10px 16px;
    border-radius:12px;
    color:#6b7280;
    font-size:13px;
    font-weight:600;
    box-shadow:0 4px 12px rgba(0,0,0,0.04);
}

/* MOBILE */
@media(max-width:768px){

    .container{
        padding:20px;
    }

    .task-header{
        flex-direction:column;
    }

    .task-header h1{
        font-size:38px;
    }

    .details-grid{
        grid-template-columns:1fr;
    }

}

</style>
