<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Wisata Jogja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('/images/login-bg.jpg')">

    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <!-- Card Login -->
    <div class="relative z-10 bg-white rounded-lg shadow-lg w-full max-w-sm p-8">

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="/images/logo.png" alt="Logo" class="h-14">
        </div>

        <!-- Error -->
        @if(session('error'))
            <div class="bg-red-100 text-red-700 text-sm p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <div>
                <input type="email" name="email" placeholder="Email address"
                    required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <input type="password" name="password" placeholder="Password"
                    required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Login
            </button>
        </form>

    </div>

</body>
</html>
