<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <script src="https://cdn.tailwindcss.com"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="lg:col-span-2 bg-white rounded-3xl shadow-sm p-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold text-indigo-950">
            Today Tasks
        </h2>

        <button type="button"
            class="text-gray-400 text-sm hover:text-gray-600">
            View detail
        </button>
    </div>

    <!-- TABLE HEADER -->
    <div class="grid grid-cols-4 text-gray-400 text-sm pb-4 border-b">
        <span>#</span>
        <span>Task</span>
        <span>In Progress</span>
        <span class="text-right">Select</span>
    </div>

    <!-- ROW 1 -->
    <div class="grid grid-cols-4 items-center py-5 border-b">

        <span class="text-gray-600">01</span>

        <input type="text"
            value="Building page"
            class="border rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-blue-300">

        <div>
            <div class="w-40 h-2 bg-blue-100 rounded-full">
                <div class="w-28 h-2 bg-blue-500 rounded-full"></div>
            </div>
        </div>

        <div class="flex justify-end">
            <input type="checkbox"
                checked
                class="w-6 h-6 accent-blue-500">
        </div>

    </div>

    <!-- ROW 2 -->
    <div class="grid grid-cols-4 items-center py-5 border-b">

        <span class="text-gray-600">02</span>

        <input type="text"
            value="Draw ERD"
            class="border rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-green-300">

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

        <input type="text"
            value="Fix Debug"
            class="border rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-purple-300">

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

        <input type="text"
            value="Set up env"
            class="border rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-orange-300">

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

    <!-- BUTTON -->
    <div class="mt-8 flex justify-end">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-2xl">
            Save Tasks
        </button>
    </div>

</form>
</body>
</html>