@props(['company'])

<div class="relative flex flex-row border border-white/10 justify-between text-left p-2 bg-white/10 rounded-sm hover:border-white transition-colors duration-200">
    <a class="absolute top-0 left-0 right-0 bottom-0" href="/companies/{{ $company->id }}"></a>
    <div class="grid grid-cols-3 w-7xl">
        <div class="flex">
            <x-company-logo width=50 />
            <p class="ml-2">{{ $company->name }}</p>
        </div>
        <p>{{ $company->email }}</p>
        <p>{{ $company->website }}</p>
    </div>
</div>
