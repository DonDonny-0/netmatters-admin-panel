<x-layout>
    <div class="flex flex-row justify-between items-center my-16">
        <div>
            <h1 class="text-3xl font-bold">Employee Details</h1>
            <p>A full run down of the employee</p>
        </div>
        <div class="text-2xl">
            <a class="border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/employees">Return to List</a>
        </div>
    </div>
    <div class="flex flex-row justify-evenly mt-16 rounded-xs border border-white/10 bg-white/15 py-8">
        <div class="max-w-120">
            <div class="pb-4">
                <x-company-logo width=350 logo="{{ $employee->logo }}" />
            </div>
            <div class="ml-4">
                <a href="/companies/{{ $company->id }}" class="hover:underline text-left font-bold text-3xl">{{ $company->name }}</a>
            </div>
        </div>
        <div class="flex flex-col w-90">
            <h1 class="mt-8 font-bold text-3xl">Full Name:</h1>
            <p class="text-xl">{{ $employee->first_name }} {{ $employee->last_name }}</p>

            <h1 class="mt-8 font-bold text-3xl">Personal Email:</h1>
            <p class="text-xl">{{ $employee->personal_email }}</p>

            <h1 class="mt-8 font-bold text-3xl">Phone Number:</h1>
            <p class="text-xl">{{ $employee->phone }}</p>

            <div class="flex flex-row justify-end mt-auto">
                <a href="/employees/{{ $employee->id }}/edit" class="text-xl p-2 border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200">Edit</a>

                <form class="mt-auto self-end pl-4" method="POST" action="/employees/{{ $employee->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="p-2 text-xl border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200">Terminate</button>
                </form>
            </div>


        </div>
    </div>
</x-layout>
