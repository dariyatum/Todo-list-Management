@extends('layouts.app')

@section('content')



    {{-- Stats --}}
    <div class="grid grid-cols-4 gap-6 mb-6">

        <div class="bg-yellow-100 p-5 rounded-xl">
            <h3 class="text-xl font-bold">24</h3>
            <p>Total Tasks</p>
        </div>

        <div class="bg-pink-100 p-5 rounded-xl">
            <h3 class="text-xl font-bold">10</h3>
            <p>Pending</p>
        </div>

        <div class="bg-green-100 p-5 rounded-xl">
            <h3 class="text-xl font-bold">5</h3>
            <p>Completed</p>
        </div>

        <div class="bg-purple-100 p-5 rounded-xl">
            <h3 class="text-xl font-bold">58%</h3>
            <p>Completion</p>
        </div>

    </div>

    {{-- Content --}}
    <div class="grid grid-cols-3 gap-6">

        <div class="col-span-2 bg-white p-5 rounded-xl shadow">
            <h3 class="font-semibold mb-4">Today's Tasks</h3>

            <ul class="space-y-3">
                <li class="flex justify-between">
                    <span>Building page</span>
                    <input type="checkbox" checked>
                </li>

                <li class="flex justify-between">
                    <span>Draw ERD</span>
                    <input type="checkbox">
                </li>
            </ul>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <h3 class="font-semibold mb-4">May 2026</h3>
            <p class="text-gray-400">Calendar placeholder</p>
        </div>

    </div>


@endsection