<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="p-8 bg-[#fdfdff] min-h-screen">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-list-check"></i>
            </div>
            <div>
                <h3 class="text-2xl font-black text-gray-800">24</h3>
                <p class="text-sm font-medium text-gray-400 uppercase tracking-wider">Total Tasks</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h3 class="text-2xl font-black text-gray-800">10</h3>
                <p class="text-sm font-medium text-gray-400 uppercase tracking-wider">Pending</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-check-double"></i>
            </div>
            <div>
                <h3 class="text-2xl font-black text-gray-800">05</h3>
                <p class="text-sm font-medium text-gray-400 uppercase tracking-wider">Completed</p>
            </div>
        </div>

        <div class="bg-indigo-600 p-6 rounded-[2rem] shadow-xl shadow-indigo-100 flex items-center gap-4 text-white">
            <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-2xl">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div>
                <h3 class="text-2xl font-black">58%</h3>
                <p class="text-sm font-medium text-indigo-100 uppercase tracking-wider">Efficiency</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-black text-gray-900 tracking-tight">Today Tasks</h2>
                    <p class="text-gray-400 font-medium">Monday, 11 May 2026</p>
                </div>
                <button class="bg-gray-50 hover:bg-gray-100 text-gray-600 px-5 py-2 rounded-xl text-sm font-bold transition-all">
                    View Analytics
                </button>
            </div>

            <div class="space-y-4">
                @php
                    $tasks = [
                        ['id' => '01', 'title' => 'Building Page', 'progress' => 'w-2/3', 'color' => 'bg-indigo-500'],
                        ['id' => '02', 'title' => 'Draw ERD Diagram', 'progress' => 'w-1/2', 'color' => 'bg-emerald-500'],
                        ['id' => '03', 'title' => 'Fix Debugging', 'progress' => 'w-3/4', 'color' => 'bg-purple-500'],
                        ['id' => '04', 'title' => 'Set up Environment', 'progress' => 'w-1/4', 'color' => 'bg-orange-500'],
                    ];
                @endphp

                @foreach($tasks as $task)
                <div class="group flex items-center justify-between p-5 rounded-3xl border border-transparent hover:border-gray-100 hover:bg-gray-50/50 transition-all">
                    <div class="flex items-center gap-6">
                        <span class="text-sm font-bold text-gray-300 group-hover:text-indigo-500">{{ $task['id'] }}</span>
                        <div>
                            <h4 class="font-bold text-gray-800">{{ $task['title'] }}</h4>
                            <div class="w-48 h-1.5 bg-gray-100 rounded-full mt-2 overflow-hidden">
                                <div class="{{ $task['progress'] }} h-full {{ $task['color'] }} rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" class="w-6 h-6 rounded-lg border-gray-300 text-indigo-600 focus:ring-indigo-500 accent-indigo-600 cursor-pointer">
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 p-8">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-gray-900">May 2026</h3>
                <div class="flex gap-2">
                    <button class="p-2 hover:bg-gray-100 rounded-lg text-gray-400"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="p-2 hover:bg-gray-100 rounded-lg text-gray-400"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="grid grid-cols-7 gap-y-4">
                @foreach(['S','M','T','W','T','F','S'] as $day)
                    <div class="text-center text-[10px] font-black text-gray-300 uppercase">{{ $day }}</div>
                @endforeach

                @for($i = 1; $i <= 31; $i++)
                    <div class="flex justify-center">
                        <div class="w-10 h-10 flex items-center justify-center text-sm font-bold rounded-xl transition-all cursor-pointer 
                            {{ $i == 11 ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-200' : 'text-gray-600 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                        </div>
                    </div>
                @endfor
            </div>

            <div class="mt-10 p-5 bg-indigo-50 rounded-3xl border border-indigo-100">
                <p class="text-xs font-bold text-indigo-400 uppercase tracking-widest">Upcoming</p>
                <h4 class="font-bold text-indigo-900 mt-1">Project Submission</h4>
                <div class="flex items-center gap-2 mt-3 text-indigo-600 text-sm">
                    <i class="fa-solid fa-calendar-day"></i>
                    <span>May 19, 2026</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection




 
</body>
</html>
