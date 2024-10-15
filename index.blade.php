<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body>

<div class="bg-black">
    <nav class="flex mx-auto container p-2 justify-between items-center">
        <div>
            <a class="text-white font-semibold text-3xl underline decoration-indigo-500" href="#">terso</a>
        </div>
        <div class="relative">
            <form class="h-full">
                <input  type="search" class="bg-transparent border rounded w-[500px] focus:outline-none text-[#ccc] px-3 py-1 border-[#333]" placeholder="Bir şeyler ara..">
            </form>
            <div class="absolute w-full bg-[#333] mt-1 rounded z-10">
                <span class="px-2 text-white font-semibold">aradığınız sonuç bulunamadı..</span>
            </div>
        </div>
        <div class="text-white flex gap-4">
            <span class="text-sm underline decoration-2 underline-offset-4 decoration-indigo-500 font-semibold">Total : 1001</span>
        </div>
    </nav>
</div>

@livewireScripts
</body>
</html>
