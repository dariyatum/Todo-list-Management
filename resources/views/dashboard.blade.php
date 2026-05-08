<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Dashboard</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f8;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')

    <div class="grid grid-cols-4 gap-6 mb-6">

        <div class="bg-yellow-100  p-5 rounded-xl shadow-sm">

            <h2 class="text-xl font-bold">24</h2>
            <p class="text-sl text-gray-600">Total Tasks</p>
            <p class="text-sm text-blue-500">All time task</p>
        </div>

        <div class="bg-pink-100 p-5 rounded-xl shadow-sm">
            <h2 class="text-xl font-bold">10</h2>
            <p class="text-sl text-gray-600">Pending</p>
            <p class="text-xs text-blue-500">Tasks to do</p>
        </div>

        <div class="bg-green-100 p-5 rounded-xl shadow-sm">
            <h3 class="text-xl font-bold">5</h3>
            <p class="text-sl text-gray-600">Completed</p>
            <p class="text-xs text-blue-500">Well Done!</p>

        </div>

        <div class="bg-purple-100 p-5 rounded-xl shadow-sm">
            <h3 class="text-xl font-bold">58%</h3>
            <p class="text-sl text-gray-600">Completion rate</p>

            <p class="text-xs text-blue-500">Keep in up!</p>
        </div>

    </div>

    <div class=" flex items-center justify-center">

        <form class="lg:col-span-2 bg-white rounded-3xl shadow-sm gap-30">

            <!-- LEFT SIDE -->
            <div class="lg:col-span-2 bg-white rounded-3xl shadow-sm p-8">

                <!-- HEADER -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-3xl font-bold text-indigo-950">
                        Today Tasks
                    </h2>

                    <button class="text-gray-400 text-sm hover:text-gray-600">
                        View detail
                    </button>
                </div>

                <!-- TABLE HEADER -->
                <div class="grid grid-cols-4 text-gray-400 text-sm pb-4 border-b">
                    <span>#</span>
                    <span>Task</span>
                    <span>in progress</span>
                    <span class="text-right">select</span>
                </div>

                <!-- ROW 1 -->
                <div class="grid grid-cols-4 items-center py-5 border-b">
                    <span class="text-gray-600">01</span>

                    <span class="text-gray-700 font-medium">
                        Building page
                    </span>

                    <div>
                        <div class="w-40 h-2 bg-blue-100 rounded-full">
                            <div class="w-28 h-2 bg-blue-500 rounded-full"></div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="w-7 h-7 rounded-lg  border-blue-500 flex items-center justify-center">
                            <input type="checkbox"
                                checked
                                class="w-6 h-6 accent-blue-500">
                        </div>
                    </div>
                </div>

                <!-- ROW 2 -->
                <div class="grid grid-cols-4 items-center py-5 border-b">
                    <span class="text-gray-600">02</span>

                    <span class="text-gray-700 font-medium">
                        Draw erd
                    </span>

                    <div>
                        <div class="w-40 h-2 bg-green-100 rounded-full">
                            <div class="w-24 h-2 bg-green-400 rounded-full"></div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <input type="checkbox"
                            class="w-6 h-6 accent-green-500">
                    </div>

                </div>

                <!-- ROW 3 -->
                <div class="grid grid-cols-4 items-center py-5 border-b">
                    <span class="text-gray-600">03</span>

                    <span class="text-gray-700 font-medium">
                        Flx dedug
                    </span>

                    <div>
                        <div class="w-40 h-2 bg-purple-100 rounded-full">
                            <div class="w-24 h-2 bg-purple-500 rounded-full"></div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <input type="checkbox"
                            class="w-6 h-6 accent-purple-500">
                    </div>
                </div>

                <!-- ROW 4 -->
                <div class="grid grid-cols-4 items-center py-5">
                    <span class="text-gray-600">04</span>

                    <span class="text-gray-700 font-medium">
                        Set up env
                    </span>

                    <div>
                        <div class="w-40 h-2 bg-orange-100 rounded-full">
                            <div class="w-14 h-2 bg-orange-500 rounded-full"></div>
                        </div>
                    </div>


                    <div class="flex justify-end">
                        <input type="checkbox"
                            class="w-6 h-6 accent-orange-500">
                    </div>
                </div>

            </div>
        </form>
        <!-- RIGHT SIDE CALENDAR -->

        <div class="bg-white rounded-3xl shadow-md p-6 w-full max-w-md  ">

            <!-- TOP -->
            <div class="flex items-center justify-between mb-8">

                <h2 class="text-5xl font-bold text-black">
                    May 2026
                </h2>

                <div class="flex gap-3">
                    <button class="w-10 h-10 rounded-full bg-orange-400 text-white flex items-center justify-center text-xl">
                        &#8249;
                    </button>

                    <button class="w-10 h-10 rounded-full bg-orange-400 text-white flex items-center justify-center text-xl">
                        &#8250;
                    </button>
                </div>
            </div>

            <!-- DAYS -->
            <div class="grid grid-cols-7 text-center text-sm font-semibold text-gray-800 mb-5">
                <span>SUN</span>
                <span>MON</span>
                <span>TUE</span>
                <span>WED</span>
                <span>THU</span>
                <span>FRI</span>
                <span>SAT</span>
            </div>

            <!-- DATES -->
            <div class="grid grid-cols-7 gap-y-5 text-center text-gray-500">

                <!-- week -->
                <span class="text-gray-300">26</span>
                <span class="text-gray-300">27</span>
                <span class="text-gray-300">28</span>
                <span class="text-gray-300">29</span>
                <span class="text-gray-300">30</span>
                <span class="text-gray-300">31</span>
                <span>01</span>

                <!-- week -->
                <span>02</span>

                <div class="relative">
                    03
                </div>

                <span>04</span>

                <div class="flex items-center justify-center">
                    <div class="w-10 h-10 rounded-full bg-orange-400 text-white flex items-center justify-center font-bold">
                        05
                    </div>
                </div>

                <span>06</span>
                <span>07</span>
                <span>08</span>

                <!-- week -->
                <span>09</span>
                <span>10</span>
                <span>11</span>
                <span>12</span>
                <span>13</span>
                <span>14</span>
                <span>15</span>

                <!-- week -->
                <span>16</span>
                <span>17</span>
                <span>18</span>

                <div class="relative">
                    19
                </div>

                <span>20</span>
                <span>21</span>
                <span>22</span>

                <!-- week -->
                <span>23</span>
                <span>24</span>
                <span>25</span>
                <span>26</span>
                <span>27</span>
                <span>28</span>
                <span>29</span>

                <!-- week -->
                <span>30</span>
                <span>31</span>
                <span class="text-gray-300">01</span>
                <span class="text-gray-300">02</span>
                <span class="text-gray-300">03</span>
                <span class="text-gray-300">04</span>
                <span class="text-gray-300">05</span>

            </div>
        </div>

    </div>
    </div>
    </div>
    </div>


    @endsection
</body>

</html>