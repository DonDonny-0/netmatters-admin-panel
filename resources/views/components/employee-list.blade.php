@props(['employee'])

<div class="relative text-left flex flex-row justify-between border p-2 border-white/10 rounded-xs bg-white/7.5 hover:border-white transition-colors duration-200">
    <a class="z-0 absolute top-0 bottom-0 left-0 right-0" href="/employees/{{ $employee->id }}"></a>
    <div>
        <div class="py-3.5">
            <h1 class="text-2xl font-bold my-auto max-w-3xs">{{ $employee->first_name }} {{ $employee->last_name }}</h1>
            <h2>{{ $employee->name }}</h2>
        </div>
    </div>
    <div>
        <x-company-logo logo="{{ $employee->logo }}" />
    </div>
</div>