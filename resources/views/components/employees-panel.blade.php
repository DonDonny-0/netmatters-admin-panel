@props(['employee'])

<div class="relative hidden w-full lg:flex flex-row border border-white/10 p-2 justify-between text-left bg-white/10 hover:border-white transition-colors duration-200">
    <a class="absolute top-0 left-0 right-0 bottom-0" href="/employees/{{ $employee->id }}"></a>
    <div class="grid grid-cols-4 w-full">
        <div class="flex align-center">
            <x-company-logo width=50 />
            <p class="ml-2">{{ $employee->first_name }} {{ $employee->last_name }}</p>
        </div>
        <p>{{ $employee->personal_email }}</p>
        <p>{{ $employee->phone }}</p>
        <p>{{ $employee->name }}</p>
    </div>
</div>

<div class="mb-2 relative lg:hidden flex flex-row border border-white/10 p-2 justify-between text-left bg-white/10 hover:border-white transition-colors duration-200">
    <a class="absolute top-0 left-0 right-0 bottom-0" href="/employees/{{ $employee->id }}"></a>
    <div class="flex items-center justify-between w-full">
        <p class="ml-2">{{ $employee->first_name }} {{ $employee->last_name }}</p>
        <x-company-logo width=50 />
    </div>
</div>
