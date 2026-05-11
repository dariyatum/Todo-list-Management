@extends('layouts.app')

@section('content')

<div class="container">

    {{-- BACK BUTTON --}}
    <div class="back-button">
        <a href="{{ route('tasks.show', $task->id) }}" class="btn-back">
            ← Back to Task
        </a>
    </div>

    {{-- EDIT CARD --}}
    <div class="edit-task-card">

        {{-- HEADER --}}
        <div class="edit-header">
            <div>
                <span class="edit-label">TASK EDITOR</span>
                <h1>Edit Task</h1>
            </div>

            <div class="header-badge">
                {{ $task->status }}
            </div>
        </div>

        {{-- FORM --}}
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">

            @csrf
            @method('PUT')

            {{-- TITLE --}}
            <div class="form-group">

                <label>📝 Task Title</label>

                <input
                    type="text"
                    name="title"
                    value="{{ $task->title }}"
                    class="form-input"
                >

            </div>

            {{-- DESCRIPTION --}}
            <div class="form-group">

                <label>📄 Description</label>

                <textarea
                    name="description"
                    class="form-textarea"
                >{{ $task->description }}</textarea>

            </div>

            {{-- GRID --}}
            <div class="form-grid">

                {{-- DUE DATE --}}
                <div class="form-group">

                    <label>📅 Due Date</label>

                    <input
                        type="date"
                        name="due_date"
                        value="{{ $task->due_date }}"
                        class="form-input"
                    >

                </div>

                {{-- STATUS --}}
                <div class="form-group">

                    <label>📊 Status</label>

                    <select name="status" class="form-select">

                        <option value="Pending"
                            {{ $task->status == 'Pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="Completed"
                            {{ $task->status == 'Completed' ? 'selected' : '' }}>
                            Completed
                        </option>

                    </select>

                </div>

                {{-- PRIORITY --}}
                <div class="form-group">

                    <label>⚡ Priority</label>

                    <select name="priority" class="form-select">

                        <option value="Low"
                            {{ $task->priority == 'Low' ? 'selected' : '' }}>
                            Low
                        </option>

                        <option value="Medium"
                            {{ $task->priority == 'Medium' ? 'selected' : '' }}>
                            Medium
                        </option>

                        <option value="High"
                            {{ $task->priority == 'High' ? 'selected' : '' }}>
                            High
                        </option>

                    </select>

                </div>

            </div>

            {{-- BUTTONS --}}
            <div class="button-group">

                <a href="{{ route('tasks.show', $task->id) }}" class="cancel-btn">
                    Cancel
                </a>

                <button type="submit" class="update-btn">
                    Update Task
                </button>

            </div>

        </form>

    </div>

</div>

@endsection


<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

body{
    background:linear-gradient(135deg,#eef2ff,#fdf2f8);
    font-family:'Inter',sans-serif;
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

/* CARD */

.edit-task-card{
    background:white;
    border-radius:32px;
    padding:45px;
    box-shadow:0 12px 35px rgba(0,0,0,0.06);
}

/* HEADER */

.edit-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
    margin-bottom:40px;
}

.edit-label{
    display:inline-block;
    margin-bottom:12px;
    font-size:13px;
    font-weight:800;
    letter-spacing:1px;
    color:#8b5cf6;
}

.edit-header h1{
    margin:0;
    font-size:48px;
    font-weight:800;
    color:#1e1b4b;
}

.header-badge{
    background:#ede9fe;
    color:#6d28d9;
    padding:12px 18px;
    border-radius:999px;
    font-size:14px;
    font-weight:700;
}

/* FORM */

.form-group{
    margin-bottom:28px;
}

.form-group label{
    display:block;
    margin-bottom:12px;
    font-size:14px;
    font-weight:700;
    color:#4b5563;
}

.form-input,
.form-textarea,
.form-select{
    width:100%;
    padding:16px 18px;
    border:1px solid #ddd6fe;
    border-radius:18px;
    font-size:16px;
    background:#fafafa;
    outline:none;
    transition:0.25s;
}

.form-input:focus,
.form-textarea:focus,
.form-select:focus{
    border-color:#6c63ff;
    background:white;
    box-shadow:0 0 0 5px rgba(108,99,255,0.12);
}

.form-textarea{
    min-height:150px;
    resize:none;
    line-height:1.7;
}

/* GRID */

.form-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:24px;
}

/* BUTTONS */

.button-group{
    display:flex;
    justify-content:flex-end;
    gap:16px;
    margin-top:40px;
    flex-wrap:wrap;
}

.cancel-btn{
    padding:14px 24px;
    border-radius:16px;
    background:#f3f4f6;
    color:#374151;
    text-decoration:none;
    font-weight:700;
    transition:0.25s;
}

.cancel-btn:hover{
    background:#e5e7eb;
}

.update-btn{
    padding:14px 26px;
    border:none;
    border-radius:16px;
    background:#6c63ff;
    color:white;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    transition:0.25s;
}

.update-btn:hover{
    background:#574bff;
    transform:translateY(-2px);
}

/* MOBILE */

@media(max-width:768px){

    .container{
        padding:20px;
    }

    .edit-task-card{
        padding:28px;
    }

    .edit-header{
        flex-direction:column;
    }

    .edit-header h1{
        font-size:36px;
    }

    .button-group{
        flex-direction:column;
    }

    .cancel-btn,
    .update-btn{
        width:100%;
        text-align:center;
    }

}

</style>