@props(['users'])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NM Admin</title>
    @vite(['resources/css/dist/hamburgers.css', 'resources/css/app.css', 'resources/js/jquery-1.11.2.min.js', 'resources/js/app.js'])
</head>
<body class="text-white bg-gray-900">
    @auth
        <header>
            <div class="sidebar bg-gray-700 rounded-b-sm">
                <div class="bg-gray-700 thenav p-5 rounded-b-sm">
                    <div class="hidden sm:flex justify-end">
                        <x-nav />
                    </div>

                    <div class="flex justify-center sm:hidden">
                        <x-nav />
                    </div>
                </div>
            </div>
        </header>
    @endauth
    <main class="flex flex-col text-white mx-auto w-4/5">
        {{ $slot }}
    </main>
    <footer>
        footer here
    </footer>
</body>
</html>
