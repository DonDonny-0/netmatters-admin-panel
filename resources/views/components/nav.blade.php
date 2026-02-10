@auth

    {{-- Nav bar for phone view --}}

    <div class="space-x-6 font-bold text-center flex flex-col mr-auto text-3xl sm:hidden">
        <a class="mr-0 pb-1" href="/">Dashboard</a>
        <a class="mr-0 pb-1" href="/employees">Employees</a>
        <a class="mr-0 pb-1" href="/companies">Companies</a>

        <form method="POST" action="/logout">
            @csrf
            @method('DELETE')

            <button class="cursor-pointer">Logout</button>
        </form>
    </div>


    {{-- Nav bar for desktop view --}}

    <div class="hidden sm:flex space-x-6 font-bold text-xl">
        <a href="/">Dashboard</a>
        <a href="/employees">Employees</a>
        <a href="/companies">Companies</a>

        <form method="POST" action="/logout">
            @csrf
            @method('DELETE')

            <button class="cursor-pointer">Logout</button>
        </form>
    </div>
@endauth
