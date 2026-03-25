<x-layout>

    <div class="flex flex-col mx-auto text-center items-center my-8 md:hidden">
        <div>
            <h1 class="text-3xl font-bold">Company Overview</h1>
            <p>A full list of every company that exists on the panel</p>
        </div>
        <div>
            <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                <h1 class="text-xl">+ Add New Company</h1>
            </a>
        </div>
    </div>

    <div class="hidden md:flex flex-row justify-between items-center my-8">
        <div>
            <h1 class="text-3xl font-bold">Company Overview</h1>
            <p>A full list of every company that exists on the panel</p>
        </div>
        <div>
            <a class="flex flex-row justify-center border p-2 border-gray-700/50 rounded-xs bg-gray-700/50 hover:border-white/40 transition-colors duration-200" href="/companies/create">
                <h1 class="text-xl">+ Add New Company</h1>
            </a>
        </div>
    </div>
    
    @if (count($companies))


        {{-- Employee list for phone view --}}

        <div class="grid grid-cols-1 mt-8 gap-8 mx-auto lg:hidden">
            @foreach($companies as $company)
                <x-company-panel :$company />
            @endforeach
        </div>


        {{-- Employee list for tablet view --}}

        <div class="hidden lg:grid grid-cols-2 mt-8 mx-auto gap-8 2xl:hidden">
            @foreach($companies as $company)
                <x-company-panel :$company />
            @endforeach
        </div>


        {{-- Employee list for desktop view --}}

        <div class="grid p-2 grid-cols-3 border border-white/50 justify-between bg-white/5 rounded-t-sm transition-colors duration-200">
            <h1 class="font-bold">Company Name</h1>
            <h1 class="font-bold">Email</h1>
            <h1 class="font-bold">Website</h1>
        </div>
        <div class="hidden 2xl:grid grid-cols-1 mx-auto">
            @foreach($companies as $company)
                <x-company-panel :$company />
            @endforeach
        </div>

        <div class="mb-12 mt-6">
            {{ $companies->links() }}
        </div>
    @else
        <p class="mt-2">No recorded Companies. Add an company <a class="underline" href="/companies/create">here</a></p>
    @endif

</x-layout>
