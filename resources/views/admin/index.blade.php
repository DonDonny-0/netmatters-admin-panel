<x-layout>
    

    {{-- Insert Admin Header Here --}}
    <x-admin-header :$admin />

    <div class="my-12">

        <div class="border border-white/10 p-4 rounded-xs bg-white/7.5">


            {{-- Company list header for phone view --}}

            <div class="flex flex-col max-w justify-between mb-4 lg:hidden">
                <div class="flex flex-col text-center">
                    <h1 class="font-bold text-3xl">Latest Companies</h1>
                    <p class="italic mt-2">Most recent appear at the top left</p>
                </div>
                <div class="self-center">
                    <a class="flex flex-row mt-4 justify-center border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                        <h1 class="text-xl">+ Add New Company</h1>
                    </a>
                </div>
            </div>


            {{-- Company list header for desktop view --}}

            <div class="hidden lg:flex flex-row justify-between mb-4">
                <div class="flex flex-row">
                    <h1 class="font-bold text-3xl text-left">Latest Companies</h1>
                    <p class="italic mt-2 ml-8">Most recent appear at the top left</p>
                </div>
                <div>
                    <a class="flex flex-row justify-center border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                        <h1 class="text-xl">+ Add New Company</h1>
                    </a>
                </div>
            </div>


            {{-- Latest Companies for phone view --}}

            <div class="grid grid-cols-1 gap-4 md:hidden">
                @foreach($companies as $company)
                    <x-company-list :$company />
                @endforeach
            </div>


            {{-- Latest Companies for tablet view --}}

            <div class="hidden md:grid grid-cols-2 gap-4 2xl:hidden">
                @foreach($companies as $company)
                    <x-company-list :$company />
                @endforeach
            </div>


            {{-- Latest Companies for desktop view --}}

            <div class="hidden 2xl:grid grid-cols-3 gap-4">
                @foreach($companies as $company)
                    <x-company-list :$company />
                @endforeach
            </div>

        </div>
    </div>

    <div class="my-20">
        <div class="border p-4 border-white/20 rounded-xs bg-white/10">


            {{-- Employee list header for phone view --}}

            <div class="flex flex-col max-w justify-between mb-4 lg:hidden">
                <div class="flex flex-col text-center">
                    <h1 class="font-bold text-3xl">Latest Employees</h1>
                    <p class="italic mt-2">Most recent appear at the top left</p>
                </div>
                <div class="self-center">
                    <a class="flex flex-row mt-4 justify-center border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/employees/create">
                        <h1 class="text-xl">+ Add New Employee</h1>
                    </a>
                </div>
            </div>


            {{-- Employee list header for desktop view --}}

            <div class="hidden lg:flex flex-row justify-between mb-4">
                <div class="flex flex-row">
                    <h1 class="font-bold text-3xl text-left">Latest Employees</h1>
                    <p class="italic mt-2 ml-8">Most recent appear at the top left</p>
                </div>
                <div>
                    <a class="flex flex-row justify-center border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/employees/create">
                        <h1 class="text-xl">+ Add New Employee</h1>
                    </a>
                </div>
            </div>


            {{-- Latest Companies for phone view --}}

            <div class="grid grid-cols gap-4 md:hidden">
                @foreach($employees as $employee)
                    <x-employee-list :$employee />
                @endforeach
            </div>


            {{-- Latest Companies for phone view --}}

            <div class="hidden md:grid grid-cols-2 gap-4 2xl:hidden">
                @foreach($employees as $employee)
                    <x-employee-list :$employee />
                @endforeach
            </div>


            {{-- Latest Companies for phone view --}}

            <div class="hidden 2xl:grid grid-cols-3 gap-4">
                @foreach($employees as $employee)
                    <x-employee-list :$employee />
                @endforeach
            </div>

        </div>
    </div>

</x-layout>
