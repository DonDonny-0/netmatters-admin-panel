<x-layout>
    <nav class="flex flex-row text-white justify-between h-12 items-center border-b border-white/20">
        @foreach($users as $user)
            <x-nav :$user></x-nav>
        @endforeach
    </nav>
</x-layout>
