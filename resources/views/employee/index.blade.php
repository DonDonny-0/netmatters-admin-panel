<x-layout>
    
    <div class="flex flex-col mx-auto text-center items-center my-8 md:hidden">
        <div>
            <h1 class="text-3xl font-bold">Employee Overview</h1>
            <p>A full list of every employee and their respective companies</p>
        </div>
        <div>
            <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">
                <h1 class="text-xl">+ Add New Employee</h1>
            </a>
        </div>
    </div>

    <div class="hidden md:flex flex-row justify-between items-center my-8">
        <div>
            <h1 class="text-3xl font-bold">Employee Overview</h1>
            <p>A full list of every employee and their respective companies</p>
        </div>
        <div>
            <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">
                <h1 class="text-xl">+ Add New Employee</h1>
            </a>
        </div>
    </div>

    @if (count($employees))

    
        {{-- Company list for phone view --}}

        <div class="grid grid-cols-1 mt-8 gap-8 mx-auto lg:hidden">
            @foreach($employees as $employee)
                <x-employees-panel :$employee />
            @endforeach
        </div>


        {{-- Company list for tablet view --}}

        <div class="hidden lg:grid grid-cols-2 mt-8 mx-auto gap-8 2xl:hidden">
            @foreach($employees as $employee)
                <x-employees-panel :$employee />
            @endforeach
        </div>


        {{-- Company list for desktop view --}}

        <div class="hidden 2xl:grid grid-cols-1">
            <div class="grid p-2 grid-cols-4 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                <h1 class="font-bold">Employee Name</h1>
                <h1 class="font-bold">Email</h1>
                <h1 class="font-bold">Phone Number</h1>
                <h1 class="font-bold">Company</h1>
            </div>
            @foreach($employees as $employee)
                <x-employees-panel :$employee />
            @endforeach
        </div>

        <div class="mb-12 mt-6">
            {{ $employees->links() }}
        </div>
    @else
        <p class="mt-2">No recorded Employees. Add an employee <a class="underline" href="/employees/create">here</a></p>
    @endif

</x-layout>
