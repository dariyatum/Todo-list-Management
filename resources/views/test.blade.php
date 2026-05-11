<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- Email -->
<div class="mb-8">

    <label class="block text-gray-500 font-semibold mb-2">
        Email
    </label>

    <div class="relative">

        <!-- Icon -->
        <i class="fa-regular fa-envelope absolute left-6 top-1/2 -translate-y-1/2 text-gray-400"></i>

        <!-- Input -->
        <input
            type="email"
            id="email"
            name="email"
            placeholder="email@gmail.com"
            class="w-full border border-gray-400 rounded-full pl-14 pr-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
        >

    </div>



                    <div class="relative">

                        <i class="fa-regular fa-envelope absolute left-6 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="email"
                            placeholder="email@gmail.com"
                            class="w-full border border-gray-400 rounded-full pl-14 pr-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />

                    </div>

</div>




  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    


  <div class="relative">

                        <i class="fa-solid fa-mobile-screen absolute left-6 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                         type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"

                            placeholder="Enter your phone no"
                            class="w-full border border-gray-400 rounded-full pl-14 pr-6 py-4 outline-none focus:ring-2 focus:ring-purple-400"
                        />
 </div>



 
</body>
</html>
