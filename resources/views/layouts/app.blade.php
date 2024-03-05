<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/90b8adf914.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="flex" x-data="{open: false}" >
        @include('layouts.sidebar')
        <div class="flex flex-col w-full">
            @include('layouts.header')
            <main class="h-auto">
                @yield('main')
            </main>
        </div>
    </div>
</body>
</html>