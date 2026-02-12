<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black flex items-center justify-center min-h-screen text-white">

<div class="w-full max-w-md bg-zinc-900 p-8 rounded-xl shadow-xl">
    <h1 class="text-2xl font-bold mb-6 text-pink-500 text-center">Admin Login</h1>

    @if(session('error'))
        <p class="text-red-500 mb-4">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/admin/login">
        @csrf
        <input type="email" name="email" placeholder="Email"
            class="w-full mb-4 p-3 rounded bg-zinc-800 border border-zinc-700" required>

        <input type="password" name="password" placeholder="Password"
            class="w-full mb-6 p-3 rounded bg-zinc-800 border border-zinc-700" required>

        <button class="w-full bg-pink-500 py-3 rounded font-semibold">Login</button>
    </form>
</div>

</body>
</html>
