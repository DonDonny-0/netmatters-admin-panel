<x-layout>

    <div class="bg-white/10 w-full mx-auto mt-16 rounded-xs relative sm:hidden">
        <div class="mb-4 ml-8 absolute -top-10 -left-8">
            <a href="/" class="mb-2 border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/companies/create">Return to Dashboard</a>
        </div>
        <form action="/companies/create" method="POST" class="flex flex-col text-left mx-auto w-9/10">
            @csrf
            <h1 class="py-8 text-3xl font-bold">Add a New Company</h1>

            <div class="flex flex-col relative px-2 pt-2">
                <label for="name" class="font-bold">Company Name<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="name" name="name" class="bg-white/15 mt-2 rounded-xs p-2">
                <x-errors name="name" />
            </div>

            <div class="flex flex-col relative px-2 pt-2">
                <label for="email" class="mt-6 font-bold">Email<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="email" name="email" class="bg-white/15 mt-2 rounded-xs p-2">
                <x-errors name="email" />
            </div>


            <div class="flex flex-col relative px-2 pt-2">
                <label for="website" class="mt-6 font-bold">Website<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="website" name="website" class="bg-white/15 mt-2 rounded-xs p-2">
                <x-errors name="website" />
            </div>


            <div class="flex flex-col relative px-2 pt-2">
                <label for="logo" class="mt-6 font-bold">Logo<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="logo" name="logo" class="bg-white/15 mt-2 rounded-xs p-2">
                <x-errors name="logo" />
            </div>


            <p class="absolute bottom-26 left-6"><span class="text-red-500 mr-1">*</span> indicate required fields</p>

            <div class="w-full mt-10">
                <button type="submit" class="my-8 border border-white/15 w-full p-3 rounded-xs bg-white/10 hover:bg-white/15 ml-auto mr-2">Add Company</button>
            </div>
        </form>
    </div>


    <div class="hidden sm:block bg-gray-800 mt-25 rounded-xs relative w-lg mx-auto">
        <div class="mb-4 ml-8 absolute -top-10 -left-8">
            <a href="/" class="mb-2 border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">Return to Dashboard</a>
        </div>
        <form action="/companies/create" method="POST" class="text-left mx-auto w-md">
            @csrf
            <h1 class="w-md ml-2 mx-auto text-3xl pt-8 font-bold">Add a New Company</h1>

            <div class="flex flex-col relative px-2 pt-6">
                <label for="name" class="font-bold">Company Name<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="name" name="name" class="bg-white/15 mt-2 rounded-xs p-3">
                <x-errors name="name" />
            </div>

            <div class="flex flex-col relative px-2 pt-4">
                <label for="email" class="mt-3 font-bold">Email<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="email" name="email" class="bg-white/15 mt-2 rounded-xs p-3">
                <x-errors name="email" />
            </div>

            <div class="flex flex-col relative px-2 pt-4">
                <label for="website" class="mt-3 font-bold">Website<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="website" name="website" class="bg-white/15 mt-2 rounded-xs p-3">
                <x-errors name="website" />
            </div>

            <div class="flex flex-col relative px-2 pt-4">
                <label for="logo" class="mt-3 font-bold">Logo<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="logo" name="logo" class="bg-white/15 mt-2 rounded-xs p-3">
                <x-errors name="logo" />
            </div>
            
            <p class="absolute bottom-10 left-12"><span class="text-red-500 mr-1">*</span> indicate required fields</p>

            <div class="flex justify-end">
                <button type="submit" class="my-8 border border-white/15 max-w-36 p-3 rounded-xs bg-white/10 hover:bg-white/15 ml-auto mr-2">Add Company</button>
            </div>
        </form>
    </div>

</x-layout>
