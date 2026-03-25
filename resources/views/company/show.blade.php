<x-layout>
    <div class="flex flex-row justify-between items-center my-16">
        <div>
            <h1 class="text-3xl font-bold">Company Details</h1>
            <p>A full run down of the company</p>
        </div>
        <div class="text-2xl">
            <a class="border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200" href="/companies">Return to List</a>
        </div>
    </div>
    <div class="flex flex-row justify-between my-16 rounded-xs border border-white/10 bg-white/15 p-4 ">
        <div>
            <x-company-logo width=350 logo="{{ $company->logo }}" />
        </div>
        <div class="mx-auto">
            <div class="flex flex-row justify-evenly">
                <div>
                    <h1 class="mt-8 font-bold text-3xl">Company Name:</h1>
                    <p class="text-xl">{{ $company->name }}</p>
                </div>
                <div class="ml-24">
                    <h1 class="mt-8 font-bold text-3xl">Company Email:</h1>
                    <p class="text-xl">{{ $company->email }}</p>
                </div>
            </div>

            <h1 class="mt-8 font-bold text-3xl">Company Website:</h1>
            <p class="text-xl max-w-110">{{ $company->website }}</p>

            <h1 class="mt-8 font-bold text-3xl">
                Number of Employees:
                <span class="text-xl font-normal ml-2">{{ $totalEmployees->count() }}</span>
            </h1>
        </div>
        <div class="flex flex-row float-end mt-6">
            <div class="mt-auto pb-3">
                <a href="/companies/{{ $company->id }}/edit" class="p-3 text-xl border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200 cursor-pointer">Edit</a>
            </div>
            <form class="mt-auto pl-4" method="POST" action="/companies/{{ $company->id }}">

                @csrf
                @method('DELETE')

                <button class="p-3 text-xl border p-2 border-white/20 rounded-xs bg-white/10 hover:border-white/40 transition-colors duration-200 cursor-pointer">Remove</button>
            </form>
        </div>
    </div>

    {{-- Employee list for phone view --}}

    <div class="grid grid-cols-1 mt-8 gap-8 mx-auto md:hidden">
        @foreach($pageEmployees as $employee)
            <x-employees-panel :$employee />
        @endforeach
    </div>


    {{-- Employee list for tablet view --}}

    <div class="hidden md:grid grid-cols-2 mt-8 mx-auto gap-8 xl:hidden">
        @foreach($pageEmployees as $employee)
            <x-employees-panel :$employee />
        @endforeach
    </div>


    {{-- Employee list for desktop view --}}

    <div class="hidden xl:grid grid-cols-1 mx-auto">
        <div class="grid p-2 grid-cols-4 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
            <h1 class="font-bold">Employee Name</h1>
            <h1 class="font-bold">Email</h1>
            <h1 class="font-bold">Phone Number</h1>
            <h1 class="font-bold">Company</h1>
        </div>
        @foreach($pageEmployees as $employee)
            <x-employees-panel :$employee />
        @endforeach
    </div>


    <div class="mb-12 mt-8">
        {{ $pageEmployees->links() }}
    </div>

</x-layout>
