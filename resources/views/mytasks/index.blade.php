{{-- resources/views/tasks/index.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="task-wrapper">

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


        {{-- TASK ROW --}}
        @php
            $colors = [
                'purple',
                'green',
                'yellow',
                'blue',
                'beige'
            ];
        @endphp

        @for($i = 0; $i < 10; $i++)

            <div class="task-row {{ $colors[$i % count($colors)] }}">

                <div class="task-info">

                    <input type="checkbox">

                    <img src="https://i.pravatar.cc/100?img={{ $i+10 }}" alt="user">

                    <div>
                        <h4>Set up laravel 13</h4>
                        <p>for full stack</p>
                    </div>

                </div>

                <div class="due-date">
                    Today, 8:00AM
                </div>

                <div>
                    <span class="badge priority">
                        Medium
                    </span>
                </div>

                <div>
                    <span class="badge status">
                        Medium
                    </span>
                </div>

                <div class="actions">

                    <button class="delete-btn">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>

                    <button class="edit-btn">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </button>

                </div>

            </div>

        @endfor

    </div>


    {{-- PAGINATION --}}
    <div class="pagination">

        <button class="page-btn disabled">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <button class="page-btn active">
            1
        </button>

        <button class="page-btn">
            2
        </button>

        <button class="page-btn">
            ...
        </button>

        <button class="page-btn">
            9
        </button>

        <button class="page-btn">
            10
        </button>

        <button class="page-btn">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

</div>

@endsection


<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');


/* ONLY TASK PAGE */

.task-wrapper{
    padding:40px;
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

.actions button{
    border:none;
    background:none;
    cursor:pointer;
    font-size:18px;
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

    .task-wrapper{
        padding:20px;
    }

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

</style>