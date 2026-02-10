@props(['users'])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NM Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col bg-black text-white mx-auto w-9/10 md:w-2/3">
    <main>
        {{ $slot }}
    </main>
    <footer class="border-t border-t-white/20 mt-12 py-8">
        <div class="flex flex-row justify-center">
            <p>Brandon Thomas Murray</p>
            <p class="ml-4">&copy;</p>
            <p class="ml-4">2026</p>
        </div>
    </footer>
</body>
</html>
