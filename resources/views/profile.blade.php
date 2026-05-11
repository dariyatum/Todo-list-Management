<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-gray-200 min-h-screen ">
  @extends('layouts.app')

@section('content')
<div>
    <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
        
        <div class="h-32 bg-gradient-to-r from-purple-300 to-pink-300"></div>

        <div class="relative px-8 pb-8">
            <div class="flex flex-col items-center -mt-20">
                <div class="relative group">
                    <img
                        src="https://i.pinimg.com/1200x/5d/5a/93/5d5a93d474d9ed4ce1866527be582334.jpg"
                        alt="profile"
                        class="w-40 h-40 rounded-full object-cover border-4  border-purple-300 shadow-2xl transition-transform duration-300 group-hover:scale-105"
                    >
                    <button class="absolute bottom-2 right-2 bg-gradient-to-r from-purple-400 to-indigo-300 w-10 h-10 rounded-full flex items-center justify-center text-white shadow-lg transition-colors">
                        <i class="fa-solid fa-camera"></i>
                    </button>
                </div>

                <div class="text-center mt-6">
                    <div class="flex items-center justify-center gap-3">
                        <h2 class="text-3xl font-extrabold text-gray-900">Chheun Nita</h2>
                        <button title="Edit Name">
                            <i class="fa-solid fa-pen-to-square text-blue-500 hover:text-blue-700 transition-colors cursor-pointer"></i>
                        </button>
                    </div>
                    <p class="text-lg font-medium text-gray-500 mt-1">@nitachheun</p>
                </div>
            </div>

            <hr class="my-8 border-gray-100">

            <div class="space-y-6 px-4 md:px-10">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                    <span class="text-sm font-bold uppercase tracking-wider text-gray-400">Username</span>
                    <div class="md:col-span-2 flex justify-between items-center bg-gray-50 p-3 rounded-xl border border-gray-100">
                        <span class="text-gray-800 font-semibold">Chheun Nita</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                    <span class="text-sm font-bold uppercase tracking-wider text-gray-400">Phone Number</span>
                    <div class="md:col-span-2 flex justify-between items-center bg-gray-50 p-3 rounded-xl border border-gray-100">
                        <span class="text-gray-800 font-semibold">088 755 7692</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                    <span class="text-sm font-bold uppercase tracking-wider text-gray-400">Email</span>
                    <div class="md:col-span-2 flex justify-between items-center bg-gray-50 p-3 rounded-xl border border-gray-100">
                        <span class="text-gray-800 font-semibold">chheunnita169@gmail.com</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                    <span class="text-sm font-bold uppercase tracking-wider text-gray-400">Address</span>
                    <div class="md:col-span-2 flex justify-between items-center bg-gray-50 p-3 rounded-xl border border-gray-100">
                        <span class="text-gray-800 font-semibold">Phnom Penh, Cambodia</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
                    </div>
                </div>

            </div>

            

        </div>
    </div>
</div>
@endsection

</body>
</html>