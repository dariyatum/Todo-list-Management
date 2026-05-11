<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Profile Page</title>
</head>
<body >
@extends('layouts.app')

@section('content')

<div class=" flex items-center justify-center min-h-screen p-5">

    <div class="bg-white w-full max-w-5xl rounded-sm shadow-lg border">


        <!-- Content -->
        <div class="flex flex-col md:flex-row gap-10 p-10">

            <!-- Profile Image -->
            <div class="relative w-fit">

                <img
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=400"
                    alt="profile"
                    class="w-32 h-32 rounded-full border-4 border-purple-300 object-cover"
                />

                <!-- Camera Icon -->
                <div class="absolute bottom-1 right-1 bg-blue-500 w-8 h-8 rounded-full flex items-center justify-center text-white shadow">
                    <i class="fa-solid fa-camera text-sm"></i>
                </div>

            </div>

            <!-- Form -->
            <div class="flex-1">

                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Personal Information
                </h2>

                <!-- Name -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

                    <!-- First Name -->
                    <div>
                        <label class="block text-gray-500 font-semibold mb-2">
                            First Name
                        </label>

                        <input
                            type="text"
                            placeholder="Chhai"
                            class="w-full border border-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label class="block text-gray-500 font-semibold mb-2">
                            Last Name
                        </label>

                        <input
                            type="text"
                            placeholder="Ken"
                            class="w-full border border-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />
                    </div>

                </div>

                <!-- Phone -->
                <div class="mb-5">

                    <label class="block text-gray-500 font-semibold mb-2">
                        Phone Number
                    </label>

                    <div class="relative">

                        <i class="fa-solid fa-mobile-screen absolute left-6 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Enter your phone no"
                            class="w-full border border-gray-400 rounded-full pl-14 pr-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />

                    </div>

                </div>

                <!-- Email -->
                <div class="mb-8">

                    <label class="block text-gray-500 font-semibold mb-2">
                        Email
                    </label>

                    <div class="relative">

                        <i class="fa-regular fa-envelope absolute left-6 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="email"
                            placeholder="email@gmail.com"
                            class="w-full border border-gray-400 rounded-full pl-14 pr-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />

                    </div>

                </div>

                <!-- Address -->
                <h2 class="text-3xl font-bold text-gray-800 mb-5">
                    Personal Address
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Country -->
                    <div>

                        <label class="block text-gray-500 font-semibold mb-2">
                            Country
                        </label>

                        <input
                            type="text"
                            placeholder="Cambodia"
                            class="w-full border border-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />

                    </div>

                    <!-- City -->
                    <div>

                        <label class="block text-gray-500 font-semibold mb-2">
                            City
                        </label>

                        <input
                            type="text"
                            placeholder="Phnom Penh"
                            class="w-full border border-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />

                    </div>

                </div>

                <!-- Button -->
                <div class="flex justify-end mt-10">

                    <button
                        class="bg-gradient-to-r from-purple-600 to-indigo-500 text-white px-10 py-4 rounded-full text-xl font-semibold shadow-lg hover:scale-105 duration-300"
                    >
                        Save Your Profile
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
</body>
</html>