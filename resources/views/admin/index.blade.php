<x-layout>
    <x-admin-header :$admin />
    <div class="flex flex-col">
        <div class="flex flex-row justify-between">
            <div class="flex w-5xl">
                <div class="w-4/5 p-5 rounded-sm bg-gray-800">
                    <div class="hidden lg:flex flex-row items-center justify-between mb-4">
                        <div class="flex flex-row">
                            <h1 class="font-bold text-xl text-left">Latest Companies</h1>
                        </div>
                        <div>
                            <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                                <h1 class="text-md">+ Add New Company</h1>
                            </a>
                        </div>
                    </div>

                    <div class="hidden 2xl:grid grid-cols-1 mx-auto">
                        <div class="grid p-2 grid-cols-1 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
                            <h1 class="font-bold">Company Name</h1>
                        </div>
                        @foreach($new_companies as $company)
                            <x-company-list :$company />
                        @endforeach
                    </div>

                </div>
                <div class="w-4/5 p-5 rounded-sm bg-gray-800 ml-12">
                    <div class="hidden lg:flex flex-row items-center justify-between mb-4">
                        <h1 class="font-bold text-xl text-left">Latest Employees</h1>
                        <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/50 transition-colors duration-200" href="/employees/create">
                            <h1 class="text-md">+ Add New Employee</h1>
                        </a>
                    </div>

                    <div class="hidden 2xl:grid grid-cols-1">
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
            <div class="flex flex-col justify-between w-md">
                <div class="p-5 rounded-sm bg-gray-800 text-2xl">
                    <h1>Total Number of Employees</h1>
                    <p>{{ $employees->count() }}</p>
                </div>
                <div class="p-5 rounded-sm bg-gray-800 text-2xl">
                    <h1>Total Number of Companies</h1>
                    <p>{{ $companies->count() }}</p>
                </div>
                <div class="p-5 rounded-sm bg-gray-800 text-2xl">
                    {{-- <h1>Company with Most Employees</h1>
                    <p>{{ $most_employees }}</p> --}}
                </div>
            </div>
        </div>
    </div>

</x-layout>
