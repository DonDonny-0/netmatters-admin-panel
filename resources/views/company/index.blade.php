<x-layout>

    <div class="flex flex-col mx-auto text-center items-center my-16 md:hidden">
        <div>
            <h1 class="text-3xl font-bold">Company Overview</h1>
            <p>A full list of every company that exists on the panel</p>
        </div>
        <div class="pt-4">
            <x-nav />
        </div>
    </div>

    <div class="hidden md:flex flex-row justify-between items-center my-16">
        <div>
            <h1 class="text-3xl font-bold">Company Overview</h1>
            <p>A full list of every company that exists on the panel</p>
        </div>
        <div>
            <x-nav />
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

        <div class="hidden 2xl:grid grid-cols-3 mt-8 mx-auto gap-8">
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
