@props(['admin'])

{{-- Admin header for phone view --}}

<div class="flex flex-col mx-auto text-center items-center my-8 md:hidden">
    <div>
        <h1 class="text-5xl pb-4 font-bold">Welcome back {{ $admin->name }}</h1>
        <p class="w-2/3 mx-auto text-lg pb-8">Here is a run down of the latest companies and employees.</p>
    </div>
    <div class="pt-4">
    </div>
</div>


{{-- Admin header for desktop view --}}

<div class="hidden md:flex xl:flex-row flex-col justify-between items-center my-8">
    <div>
        <h1 class="text-4xl text-left font-bold">Welcome back, {{ $admin->name }}</h1>
        <p class="text-center">Here is a run down of the latest companies and employees.</p>
    </div>
</div>