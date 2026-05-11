<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dashboard</title>

   
</head>

<body class="p-8">
    @extends('layouts.app')

    @section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-6 rounded-2xl border border-yellow-100 shadow-sm card-hover">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-yellow-400/10 rounded-lg text-yellow-600"><i class="text-2xl fa-solid fa-list-check"></i></div>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-800">24</h2>
            <p class="font-semibold text-gray-600">Total Tasks</p>
            <p class="text-xs font-medium text-yellow-600 mt-2 uppercase tracking-wider">All time activity</p>
        </div>

        <div class="bg-gradient-to-br from-pink-50 to-rose-50 p-6 rounded-2xl border border-pink-100 shadow-sm card-hover">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-pink-400/10 rounded-lg text-pink-600"><i class="fa-solid fa-clock text-2xl"></i></div>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-800">10</h2>
            <p class="font-semibold text-gray-600">Pending</p>
            <p class="text-xs font-medium text-pink-600 mt-2 uppercase tracking-wider">Tasks to do</p>
        </div>

        <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-6 rounded-2xl border border-emerald-100 shadow-sm card-hover">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-emerald-400/10 rounded-lg text-emerald-600"><i class=" text-2xl fa-solid fa-circle-check"></i></div>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-800">05</h2>
            <p class="font-semibold text-gray-600">Completed</p>
            <p class="text-xs font-medium text-emerald-600 mt-2 uppercase tracking-wider">Well Done!</p>
        </div>

        <div class="bg-gradient-to-br from-indigo-50 to-blue-50 p-6 rounded-2xl border border-indigo-100 shadow-sm card-hover">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-indigo-400/10 rounded-lg text-indigo-600"><i class="text-2xl fa-solid fa-chart-line"></i></div>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-800">58%</h2>
            <p class="font-semibold text-gray-600">Completion rate</p>
            <p class="text-xs font-medium text-indigo-600 mt-2 uppercase tracking-wider">Keep it up!</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 bg-white rounded-[2rem] shadow-xl shadow-gray-200/50 p-8 border border-gray-100">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-2xl font-black text-indigo-950 tracking-tight">Today's Tasks</h2>
                    <p class="text-sm text-gray-400">Manage your daily workflow</p>
                </div>
                <button class="px-4 py-2 text-indigo-600 font-bold text-sm bg-indigo-50 rounded-xl hover:bg-indigo-100 transition-colors">
                    View detail
                </button>
            </div>

            <div class="space-y-2">
                <div class="grid grid-cols-4 text-gray-400 text-xs font-bold uppercase tracking-widest pb-4 px-4">
                    <span>#</span>
                    <span>Task Name</span>
                    <span>Progress</span>
                    <span class="text-right">Action</span>
                </div>

                <div class="grid grid-cols-4 items-center p-4 rounded-2xl hover:bg-gray-50 transition-all border-b border-gray-50">
                    <span class="text-gray-400 font-bold">01</span>
                    <span class="text-gray-800 font-bold">Building page</span>
                    <div class="pr-8">
                        <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="w-[70%] h-full bg-indigo-500 rounded-full shadow-[0_0_8px_rgba(99,102,241,0.4)]"></div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <input type="checkbox" checked class="w-6 h-6 rounded-lg accent-indigo-600 cursor-pointer">
                    </div>
                </div>

                <div class="grid grid-cols-4 items-center p-4 rounded-2xl hover:bg-gray-50 transition-all border-b border-gray-50">
                    <span class="text-gray-400 font-bold">02</span>
                    <span class="text-gray-800 font-bold">Draw ERD</span>
                    <div class="pr-8">
                        <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="w-[45%] h-full bg-emerald-400 rounded-full shadow-[0_0_8px_rgba(52,211,153,0.4)]"></div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <input type="checkbox" class="w-6 h-6 rounded-lg accent-emerald-500 cursor-pointer">
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center p-4 rounded-2xl hover:bg-gray-50 transition-all border-b border-gray-50">
                    <span class="text-gray-400 font-bold">03</span>
                    <span class="text-gray-800 font-bold">Draw ERD</span>
                    <div class="pr-8">
                        <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="w-[45%] h-full bg-pink-500 rounded-full shadow-[0_0_8px_rgba(52,211,153,0.4)]"></div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <input type="checkbox" class="w-6 h-6 rounded-lg accent-pink-400 cursor-pointer">
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center p-4 rounded-2xl hover:bg-gray-50 transition-all border-b border-gray-50">
                    <span class="text-gray-400 font-bold">04</span>
                    <span class="text-gray-800 font-bold">Draw ERD</span>
                    <div class="pr-8">
                        <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="w-[45%] h-full bg-red-500 rounded-full shadow-[0_0_8px_rgba(52,211,153,0.4)]"></div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <input type="checkbox" class="w-6 h-6 rounded-lg accent-red-400 cursor-pointer">
                    </div>
                </div>

                <div class="grid grid-cols-4 items-center p-4 rounded-2xl hover:bg-gray-50 transition-all border-b border-gray-50">
                    <span class="text-gray-400 font-bold">05</span>
                    <span class="text-gray-800 font-bold">Fix Bugs</span>
                    <div class="pr-8">
                        <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="w-[90%] h-full bg-purple-500 rounded-full shadow-[0_0_8px_rgba(168,85,247,0.4)]"></div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <input type="checkbox" class="w-6 h-6 rounded-lg accent-purple-500 cursor-pointer">
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-xl shadow-gray-200/50 border border-gray-100 p-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-black text-gray-900">May 2026</h3>
                    <p class="text-xs text-indigo-500 font-bold">12 Events this month</p>
                </div>
                <div class="flex gap-2">
                    <button class="w-10 h-10 flex items-center justify-center hover:bg-gray-100 rounded-xl text-gray-400 transition-all"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="w-10 h-10 flex items-center justify-center hover:bg-gray-100 rounded-xl text-gray-400 transition-all"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="grid grid-cols-7 gap-y-2">
                @foreach(['Sun','Mon','Tue','Wed','Thu','Fri','Sat'] as $day)
                <div class="text-center text-[11px] font-extrabold text-gray-300 uppercase tracking-tighter mb-4">{{ $day }}</div>
                @endforeach

                @for($i = 1; $i <= 31; $i++)
                    <div class="flex justify-center p-1">
                    <div class="w-10 h-10 flex items-center justify-center text-sm font-bold rounded-xl transition-all cursor-pointer 
                            {{ $i == 11 ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-200 ring-4 ring-indigo-50' : 'text-gray-600 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        {{ $i }}
                    </div>
            </div>
            @endfor
        </div>

        <div class="mt-8 p-4 bg-indigo-50 rounded-2xl border border-indigo-100">
            <p class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-1">Upcoming</p>
            <p class="text-sm font-bold text-indigo-900">Project Deadline Revision</p>
        </div>
    </div>

    </div>

    @endsection
</body>

</html>
 <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            /* Lighter, cleaner background */
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.05);
        }

        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
    </style>