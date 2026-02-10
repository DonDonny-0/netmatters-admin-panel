@props(['employee'])

<div class="relative flex flex-row border border-white/10 justify-between text-left p-6 bg-white/10 rounded-sm hover:border-white transition-colors duration-200">
    <a class="absolute top-0 left-0 right-0 bottom-0" href="/employees/{{ $employee->id }}"></a>
    <div class="flex flex-col w-3xs">
        <div>
            <h1 class="font-bold">Employee Name</h1>
            <p>{{ $employee->first_name }} {{ $employee->last_name }}</p>
        </div>
        <div>
            <h1 class="font-bold mt-4">Employee Email</h1>
            <p>{{ $employee->personal_email }}</p>
        </div>
        <div>
            <h1 class="font-bold mt-4">Employee Phone</h1>
            <p>{{ $employee->phone }}</p>
        </div>
        <div>
            <h1 class="font-bold mt-4">Company</h1>
            <p>{{ $employee->name }}</p>
        </div>
    </div>
    <div>
        <x-company-logo width=75 />
    </div>
</div>
