<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-6 rounded shadow w-80">
    <h2 class="text-xl font-bold mb-4 text-center">Login</h2>

    @if(session('error'))
        <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-3 rounded">
        <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-3 rounded">

        <button class="w-full bg-blue-500 text-white p-2 rounded">
            Login
        </button>
    </form>
</div>

</body>
</html>