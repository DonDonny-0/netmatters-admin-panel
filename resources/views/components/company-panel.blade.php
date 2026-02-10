@props(['company'])

<div class="relative flex flex-row border border-white/10 justify-between text-left p-6 bg-white/10 rounded-sm hover:border-white transition-colors duration-200">
    <a class="absolute top-0 left-0 right-0 bottom-0" href="/companies/{{ $company->id }}"></a>
    <div class="flex flex-col w-3xs">
        <div>
            <h1 class="font-bold">Company Name</h1>
            <p>{{ $company->name }}</p>
        </div>
        <div>
            <h1 class="font-bold mt-4">Company Email</h1>
            <p>{{ $company->email }}</p>
        </div>
        <div>
            <h1 class="font-bold mt-4">Company Website</h1>
            <p>{{ $company->website }}</p>
        </div>
    </div>
    <div>
        <x-company-logo width=75 />
    </div>
</div>
