<x-layout>
    <div class="bg-white/20 mt-16 rounded-xs relative max-w-lg mx-auto">
        <form action="/login" method="POST" class="flex flex-col text-left mx-auto w-9/10 max-w-lg">
            @csrf
            <div class="pt-8">
                <h1 class="text-3xl">Login as Admin</h1>
            </div>

            <label for="email" class="mt-8">Email<span class="text-red-500 ml-2">*</span></label><br>
            <input type="text" id="email" name="email" class="bg-white/25 rounded-xs p-2 mt-2">

            <label for="password" class="mt-4">Password<span class="text-red-500 ml-2">*</span></label><br>
            <input type="password" id="password" name="password" class="bg-white/25 mt-2 rounded-xs p-2">

            <div class="flex flex-row justify-between pt-4 my-8 items-center">
                <div class="pb-6 pl-1">
                    <x-errors name="password" />
                </div>
                <button type="submit" class="border p-3 rounded-sm bg-white/10 hover:bg-white/15">Log In</button>
            </div>
        </form>
    </div>
</x-layout>

