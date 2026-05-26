<x-layout>

    <x-admin-header :$admin />


    {{-- Grid Desktop View --}}

    <div class="hidden lg:flex flex-row justify-evenly ">

        <div class="w-1/2 p-5 rounded-sm bg-gray-800">
            
            <div class="flex flex-row items-center justify-between mb-4">
                <div class="flex flex-row">
                    <h1 class="font-bold text-xl text-left">Latest Companies</h1>
                </div>
                <div>
                    <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                        <h1 class="text-md">+ Add New Company</h1>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 mx-auto">
                <div class="grid p-2 grid-cols-1 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                    <h1 class="font-bold">Company Name</h1>
                </div>
                @foreach($new_companies as $company)
                    <x-company-list :$company />
                @endforeach
            </div>

        </div>
        <div class="w-1/2 p-5 rounded-sm bg-gray-800 ml-12">
            <div class="flex flex-row items-center justify-between mb-4">
                <h1 class="font-bold text-xl text-left">Latest Employees</h1>
                <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">
                    <h1 class="text-md">+ Add New Employee</h1>
                </a>
            </div>

            <div class="grid grid-cols-1">
                <div class="grid p-2 grid-cols-2 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                    <h1 class="font-bold">Employee Name</h1>
                    <h1 class="font-bold">Company</h1>
                </div>
                @foreach($new_employees as $employee)
                    <x-employee-list :$employee />
                @endforeach
            </div>
        </div>
        
    </div>


    {{-- Grid Mobile View --}}

    <div class="flex flex-col justify-evenly mx-auto w-full lg:hidden">
        <div class="p-5 rounded-sm bg-gray-800">
            
            <div class="flex flex-row items-center justify-between mb-4">
                <div class="flex flex-row">
                    <h1 class="font-bold text-xl text-left">Latest Companies</h1>
                </div>
                <div>
                    <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                        <h1 class="text-md">+ Add New Company</h1>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 mx-auto">
                <div class="grid p-2 grid-cols-1 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                    <h1 class="font-bold">Company Name</h1>
                </div>
                @foreach($new_companies as $company)
                    <x-company-list :$company />
                @endforeach
            </div>

        </div>
        <div class="p-5 rounded-sm bg-gray-800 mt-8">
            <div class="flex flex-row items-center justify-between mb-4">
                <h1 class="font-bold text-xl text-left">Latest Employees</h1>
                <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">
                    <h1 class="text-md">+ Add New Employee</h1>
                </a>
            </div>

            <div class="grid grid-cols-1">
                <div class="grid p-2 grid-cols-2 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                    <h1 class="font-bold">Employee Name</h1>
                    <h1 class="font-bold">Company</h1>
                </div>
                @foreach($new_employees as $employee)
                    <x-employee-list :$employee />
                @endforeach
            </div>
        </div>
    </div>


    {{-- Cards Desktop View --}}

    <div>
        <div class="hidden lg:flex flex-row justify-between mt-20">
            <div class="p-5 rounded-sm bg-gray-800 text-2xl w-3/10">
                <h1>Total Number of Employees</h1>
                <p>{{ $employees->count() }}</p>
            </div>
            <div class="p-5 rounded-sm bg-gray-800 text-2xl w-3/10">
                <h1>Total Number of Companies</h1>
                <p>{{ $companies->count() }}</p>
            </div>
            <div class="p-5 rounded-sm bg-gray-800 text-2xl w-3/10">
                <h1>Companies With Most Employees</h1>
                <p>{{ $companies->count() }}</p>
            </div>
        </div>
    </div>


    {{-- Cards Mobile View --}}

    <div>
        <div class="flex flex-col justify-between mt-20 lg:hidden">
            <div class="p-5 rounded-sm bg-gray-800 text-2xl mb-8">
                <h1>Total Number of Employees</h1>
                <p>{{ $employees->count() }}</p>
            </div>
            <div class="p-5 rounded-sm bg-gray-800 text-2xl mb-8">
                <h1>Total Number of Companies</h1>
                <p>{{ $companies->count() }}</p>
            </div>
            <div class="p-5 rounded-sm bg-gray-800 text-2xl mb-8">
                <h1>Companies With Most Employees</h1>
                <p>{{ $companies->count() }}</p>
            </div>
        </div>
    </div>

</x-layout>
