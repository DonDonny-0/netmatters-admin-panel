@props(['company'])

<a href="/companies/{{ $company->id }}" class="flex flex-row justify-between border p-2 border-white/20 rounded-xs bg-white/7.5 hover:border-white transition-colors duration-200">
    <h1 class="text-left text-lg font-bold my-auto">{{ $company->name }}</h1>
    <x-company-logo logo="{{ $company->logo }}" width=60 />
</a>