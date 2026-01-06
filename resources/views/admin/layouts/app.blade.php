<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<script src="https://cdn.tailwindcss.com"></script>

<script>
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('-ml-64')
}
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#4f46e5',
        secondary: '#06b6d4'
      }
    }
  }
}
</script>

<style>
.smooth{transition:all .3s ease}
.smooth:hover{
  transform:translateY(-6px);
  box-shadow:0 15px 30px rgba(0,0,0,.12)
}
</style>
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

<!-- SIDEBAR -->
<aside id="sidebar" class="w-64 bg-gray-900 text-white transition-all duration-300">
  <div class="p-4 font-bold text-xl border-b border-gray-700">
    Admin Jogja
  </div>
  <nav class="p-4 space-y-2 text-sm">
    <a href="/admin" class="block p-2 rounded hover:bg-gray-700">🏠 Dashboard</a>
    <a href="/admin/wisata" class="block p-2 rounded hover:bg-gray-700">🌴 Wisata</a>
    <a href="/admin/artikel" class="block p-2 rounded hover:bg-gray-700">📰 Artikel</a>
  </nav>
</aside>

<!-- MAIN -->
<div class="flex-1">

<header class="bg-white shadow px-6 py-3 flex justify-between items-center">
  <button onclick="toggleSidebar()">☰</button>
  <div>
    {{ auth()->user()->name }}
    <a href="/logout" class="text-red-500 ml-4">Logout</a>
  </div>
</header>

<main class="p-6">
  @yield('content')
</main>

</div>
</div>
</body>
</html>
