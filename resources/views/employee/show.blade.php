<x-layout>
    <div class="flex flex-row justify-between items-center my-16">
        <div>
            <h1 class="text-3xl font-bold">Employee Details</h1>
            <p>A full run down of the employee</p>
        </div>
        <div class="text-2xl">
            <a class="hover:underline" href="/employees">Return to List</a>
        </div>
    </div>
    <div class="flex flex-row justify-evenly mt-16 rounded-xs border border-white/10 bg-white/15 py-8 w-4xl mx-auto">
        <div class="max-w-87.5">
            <div class="pb-4">
                <x-company-logo width=350 logo="{{ $employee->logo }}" />
            </div>
            <div class="ml-4">
                <a href="/companies/{{ $company->id }}" class="hover:underline text-left font-bold text-3xl">{{ $company->name }}</a>
            </div>
        </div>
        <div class="flex flex-col">
            <h1 class="mt-8 font-bold text-3xl">Full Name:</h1>
            <p class="text-xl">{{ $employee->first_name }} {{ $employee->last_name }}</p>

            <h1 class="mt-8 font-bold text-3xl">Personal Email:</h1>
            <p class="text-xl">{{ $employee->personal_email }}</p>

            <h1 class="mt-8 font-bold text-3xl">Phone Number:</h1>
            <p class="text-xl">{{ $employee->phone }}</p>

            <div class="flex flex-row justify-end mt-auto">
                <a href="/employees/{{ $employee->id }}/edit" class="p-3 bg-blue-500 font-bold text-lg rounded-lg hover:bg-blue-600 cursor-pointer">Edit</a>

                <form class="mt-auto self-end pl-4" method="POST" action="/employees/{{ $employee->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="p-3 bg-red-500 font-bold text-lg rounded-lg hover:bg-red-600 cursor-pointer">Terminate</button>
                </form>
            </div>


        </div>
    </div>
</x-layout>
