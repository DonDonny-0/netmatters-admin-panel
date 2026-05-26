@auth

    {{-- Nav bar for desktop view --}}

    <div class="flex items-center flex-row text-center space-x-6 font-bold text-xl w-md justify-evenly">
        
        <div class="hidden sm:inline-block">
            <a class="mr-2 text-md" href="/">Dashboard</a>
            <a class="mr-2 text-md" href="/employees">Employees</a>
            <a class="mr-2 text-md" href="/companies">Companies</a>

            <form class="text-md inline" method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button class="cursor-pointer">Logout</button>
            </form>
        </div>

        <div class="inline-block sm:hidden">
            <a class="mr-2 text-sm" href="/">Dashboard</a>
            <a class="mr-2 text-sm" href="/employees">Employees</a>
            <a class="mr-2 text-sm" href="/companies">Companies</a>

            <form class="text-sm inline" method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button class="cursor-pointer">Logout</button>
            </form>
        </div>
    
    </div>
@endauth
