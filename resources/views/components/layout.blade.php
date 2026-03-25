@props(['users'])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NM Admin</title>
    @vite(['resources/css/dist/hamburgers.css', 'resources/css/app.css', 'resources/js/jquery-1.11.2.min.js', 'resources/js/app.js'])
</head>
<body class="text-white bg-gray-900 w-4/5 mx-auto">
    @auth
        <header class="w-2/5 ml-auto">
            <div class="sidebar bg-gray-700 rounded-b-sm">
                <div class="bg-gray-700 thenav p-5 rounded-b-sm">
                    <div class="relative">
                        <x-nav />
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark w-2/10 ml-auto">
                <button class="navbar-toggler bg-gray-700 rounded-b-sm" type="button">
                <span class="navbar-toggler-icon hamburger hamburger--spin">
                    <span class="hamburger-box -mr-2.25">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                </button>
            </nav>
        </header>
    @endauth
    <main class="flex flex-col text-white">
        {{ $slot }}
    </main>
</body>
</html>
