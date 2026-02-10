<x-layout>
    
    <div class="flex flex-col mx-auto text-center items-center my-16 md:hidden">
        <div>
            <h1 class="text-3xl font-bold">Employee Overview</h1>
            <p>A full list of every employee and their respective companies</p>
        </div>
        <div class="pt-4">
            <x-nav />
        </div>
    </div>

    <div class="hidden md:flex flex-row justify-between items-center my-16">
        <div>
            <h1 class="text-3xl font-bold">Employee Overview</h1>
            <p>A full list of every employee and their respective companies</p>
        </div>
        <div>
            <x-nav />
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

        <div class="hidden 2xl:grid grid-cols-3 mt-8 mx-auto gap-8">
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
