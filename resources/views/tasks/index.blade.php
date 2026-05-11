{{-- resources/views/tasks/index.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="task-wrapper">

    {{-- ADD TASK COMPONENT --}}
    <x-add-task-modal />

    {{-- DATE SELECTOR --}}
    <div class="date-scroll">

        <div class="date-card">
            <span>WED</span>
            <h3>25</h3>
        </div>

        <div class="date-card active">
            <span>THU</span>
            <h3>26</h3>
        </div>

        <div class="date-card">
            <span>FRI</span>
            <h3>27</h3>
        </div>

        <div class="date-card">
            <span>SAT</span>
            <h3>28</h3>
        </div>

        <div class="date-card">
            <span>SUN</span>
            <h3>29</h3>
        </div>

        <div class="date-card">
            <span>MON</span>
            <h3>30</h3>
        </div>

        <div class="date-card">
            <span>TUE</span>
            <h3>30</h3>
        </div>

    </div>


    {{-- TASK TABLE --}}

    <div class="task-table">

        {{-- HEADER --}}
        <div class="table-header">

            <div class="task-col">
                <input type="checkbox">
                <span>Task</span>
            </div>

            <div>Due Date</div>
            <div>Priority</div>
            <div>Status</div>
            <div>Actions</div>

        </div>


@foreach ($tasks as $task)

<div class="task-row">

    <div class="task-info">

        <input type="checkbox">

        <div>

            <h4>
                <a href="{{ route('tasks.show', $task->id) }}" class="task-link">
                    {{ $task->title }}
                </a>
            </h4>

            <p>{{ $task->description }}</p>

        </div>

    </div>

    <div class="due-date">
        {{ $task->due_date }}
    </div>

    <div>
        <span class="badge priority">
            {{ $task->priority }}
        </span>
    </div>

    <div>
        <span class="badge status">
            {{ $task->status }}
        </span>
    </div>

    <div class="actions">

        {{-- DELETE --}}
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit" class="delete-btn">
                <i class="fa-regular fa-trash-can"></i>
            </button>

        </form>

        {{-- EDIT --}}
        <a href="{{ route('tasks.edit', $task->id) }}" class="edit-btn">
            <i class="fa-regular fa-pen-to-square"></i>
        </a>

    </div>

</div>

@endforeach

    </div>


    {{-- PAGINATION --}}
<div class="pagination-wrapper">
    {{ $tasks->links() }}
</div>
</div>

@endsection


<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');


/* ONLY TASK PAGE */

.task-wrapper{
    width:100%;
    font-family:'Inter',sans-serif;
    color:#222;
}


/* DATE SELECTOR */

.date-scroll{
    display:flex;
    gap:24px;
    margin-bottom:40px;
    overflow-x:auto;
    justify-content: center;
}

.date-card{
    min-width:110px;
    height:110px;
    background:white;
    border:1px solid #ddd;
    border-radius:14px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    transition:0.3s;
    cursor:pointer;
    flex-shrink:0;
}

.date-card span{
    font-size:14px;
    font-weight:700;
    color:#888;
    letter-spacing:1px;
    margin-bottom:8px;
}

.date-card h3{
    font-size:20px;
    font-weight:700;
    color:#666;
}

.date-card.active{
    background:#f3e66f;
    box-shadow:0 6px 12px rgba(0,0,0,0.12);
}

.date-card.active span,
.date-card.active h3{
    color:#222;
}


/* TABLE */

.task-table{
    background:white;
    border:1px solid #d7d7d7;
    border-radius:28px;
    padding:20px;
    overflow-x:auto;
}

.table-header{
    display:grid;
    grid-template-columns:2fr 2fr 1fr 1fr 120px;
    padding:0 15px 20px;
    font-weight:700;
    align-items:center;
    min-width:900px;
}

.task-col{
    display:flex;
    align-items:center;
    gap:16px;
}


/* TASK ROW */

.task-row{
    display:grid;
    grid-template-columns:2fr 2fr 1fr 1fr 120px;
    align-items:center;
    padding:12px 15px;
    border-radius:14px;
    margin-bottom:12px;
    min-width:900px;
    background-color: #d9c3f2;
    border: 1px solid grey;
}

.task-info{
    display:flex;
    align-items:center;
    gap:16px;
}

.task-info img{
    width:42px;
    height:42px;
    border-radius:50%;
    object-fit:cover;
}

.task-info h4{
    font-size:20px;
    font-weight:700;
}

.task-info p{
    font-size:13px;
    color:#888;
    margin-top:3px;
}

.due-date{
    font-size:20px;
}


/* ROW COLORS */

.purple{
    background:#d9c3f2;
}

.green{
    background:#cfe8d4;
}

.yellow{
    background:#f3ea9a;
}

.blue{
    background:#b8d4f2;
}

.beige{
    background:#eadbc2;
}


/* BADGES */

.badge{
    display:inline-block;
    padding:8px 16px;
    border-radius:30px;
    font-size:18px;
    font-weight:500;
}

.priority{
    background:#f5c8b6;
    color:red;
}

.status{
    background:#a8e5ae;
    color:#159b2c;
}


/* ACTIONS */

.actions{
    display:flex;
    gap:14px;
}



.delete-btn{
    color:#ff5e3a;
}

.edit-btn{
    color:#5533ff;
}


/* PAGINATION */

.pagination{
    display:flex;
    justify-content:center;
    gap:10px;
    margin-top:40px;
    flex-wrap:wrap;
}

.page-btn{
    width:42px;
    height:42px;
    border-radius:8px;
    border:1px solid #d9d9d9;
    background:white;
    cursor:pointer;
    font-weight:600;
}

.page-btn.active{
    border:2px solid #4c35ff;
    color:#4c35ff;
}

.page-btn.disabled{
    opacity:0.4;
    cursor:not-allowed;
}


/* CHECKBOX */

.task-wrapper input[type="checkbox"]{
    width:18px;
    height:18px;
    cursor:pointer;
}


/* RESPONSIVE */

@media(max-width:768px){


    .date-card{
        min-width:90px;
        height:90px;
    }

    .task-info h4{
        font-size:16px;
    }

    .due-date{
        font-size:16px;
    }

    .badge{
        font-size:14px;
        padding:6px 12px;
    }

}
.task-link{
    text-decoration:none;
    color:inherit;
}

.task-link:hover{
    opacity:0.8;
}

.delete-btn,
.edit-btn{
    background:none;
    border:none;
    cursor:pointer;
    font-size:18px;
    text-decoration:none;
}
.task-link{
    text-decoration:none;
    color:#222;
    transition:0.2s;
}

.task-link:hover{
    color:#5533ff;
}

.delete-btn,
.edit-btn{
    background:none;
    border:none;
    cursor:pointer;
    font-size:18px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.delete-btn{
    color:#ff5e3a;
}

.edit-btn{
    color:#5533ff;
}

.actions form{
    margin:0;
}

</style>