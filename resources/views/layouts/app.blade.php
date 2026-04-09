folder layouts 
app.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    @include('components.header')

    <div class="flex flex-1">
        @include('components.sidebar')

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

</body>
</html>