<x-layout>

    <div class="bg-white/10 max-w-lg mx-auto mt-16 rounded-xs relative sm:hidden">
        <form action="/employees/create" method="POST" class="flex flex-col text-left mx-auto w-9/10">
            @csrf
            <h1 class="py-8 text-3xl font-bold">Add a New Employee</h1>

            <label for="first_name" class="font-bold">First Name<span class="text-red-500 ml-2">*</span></label>
            <input type="text" id="first_name" name="first_name" class="bg-white/15 mt-2 rounded-xs p-2">
            <x-errors name="first_name" />

            <label for="last_name" class="mt-4 font-bold">Last Name<span class="text-red-500 ml-2">*</span></label>
            <input type="text" id="last_name" name="last_name" class="bg-white/15 mt-2 rounded-xs p-2">
            <x-errors name="last_name" />

            <label for="personal_email" class="mt-4 font-bold">Email<span class="text-red-500 ml-2">*</span></label>
            <input type="text" id="personal_email" name="personal_email" class="bg-white/15 mt-2 rounded-xs p-2">
            <x-errors name="personal_email" />

            <label for="phone" class="mt-4 font-bold">Phone<span class="text-red-500 ml-2">*</span></label>
            <input type="text" id="phone" name="phone" class="bg-white/15 mt-2 rounded-xs p-2">
            <x-errors name="phone" />

            <label for="company_id" class="mt-4 font-bold">Company<span class="text-red-500 ml-2">*</span></label>
            <input type="text" id="company_id" name="company_id" class="bg-white/15 mt-2 rounded-xs p-2">
            <x-errors name="company_id" />

            <p class="absolute bottom-12 left-6"><span class="text-red-500 mr-1">*</span> indicate required fields</p>
            <div class="flex justify-end">
                <button type="submit" class="my-8 border border-white/15 max-w-36 p-3 rounded-xs bg-white/10 hover:bg-white/15 ml-auto mr-2">Add Employee</button>
            </div>
        </form>
    </div>

    <div class="hidden sm:block bg-white/10 max-w-lg mx-auto mt-16 rounded-xs relative">
        <form action="/employees/create" method="POST" class="text-left mx-auto w-md">
            @csrf
            <h1 class="py-8 ml-2 w-md mx-auto text-3xl font-bold">Add a New Employee</h1>

            <div class="flex flex-row pt-4">
                <div class="flex flex-col px-2">
                    <label for="first_name" class="font-bold">First Name<span class="text-red-500 ml-2">*</span></label>
                    <input type="text" id="first_name" name="first_name" class="bg-white/15 mx-auto mt-2 rounded-xs p-3">
                    <x-errors name="first_name" />
                </div>
                <div class="flex flex-col px-2">
                    <label for="last_name" class="font-bold">Last Name<span class="text-red-500 ml-2">*</span></label>
                    <input type="text" id="last_name" name="last_name" class="bg-white/15 mx-auto mt-2 rounded-xs p-3">
                    <x-errors name="last_name" />
                </div>
            </div>
            <div class="flex flex-row border-b-2 border-b-white/10 pb-10">
                <div class="flex flex-col px-2">
                    <label for="personal_email" class="mt-6 font-bold">Email<span class="text-red-500 ml-2">*</span></label>
                    <input type="text" id="personal_email" name="personal_email" class="bg-white/15 mx-auto mt-2 rounded-xs p-3">
                    <x-errors name="personal_email" />
                </div>
                <div class="flex flex-col px-2">
                    <label for="phone" class="mt-6 font-bold">Phone<span class="text-red-500 ml-2">*</span></label>
                    <input type="text" id="phone" name="phone" class="bg-white/15 mx-auto mt-2 rounded-xs p-3">
                    <x-errors name="phone" />
                </div>
            </div>
            <div class="flex flex-col px-2 relative">
                <label for="company_id" class="mt-6 font-bold">Company<span class="text-red-500 ml-2">*</span></label>
                <input type="text" id="company_id" name="company_id" class="bg-white/15 mt-2 rounded-xs p-3">
                <x-errors name="company_id" />
            </div>

            <p class="absolute bottom-10 left-12"><span class="text-red-500 mr-1">*</span> indicate required fields</p>
            <div class="flex justify-end">
                <button type="submit" class="my-8 border border-white/15 max-w-36 p-3 rounded-xs bg-white/10 hover:bg-white/15 ml-auto mr-2">Add Employee</button>
            </div>
        </form>
    </div>
    <div class="text-center mt-8 text-lg">
        <a href="/" class="hover:underline">Return to Dashboard</a>
    </div>
</x-layout>
