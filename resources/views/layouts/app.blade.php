<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex h-screen">

    {{-- Sidebar --}}
    <x-sidebar />

    {{-- Main --}}
    <div class="flex-1 flex flex-col">

        {{-- Header --}}
        <x-header />

        {{-- Page Content --}}
        <main class="p-6 overflow-y-auto">
           @yield('content')
        </main>

    </div>
</div>

</body>
</html>