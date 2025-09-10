<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title', 'My App')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="flex justify-between items-center py-4">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="font-extrabold text-2xl text-gray-900">Dwello</a>

      <!-- Menu -->
      <div class="hidden md:flex space-x-8 text-gray-700 font-medium">
        <a href="#" class="hover:text-black">Home</a>
        <a href="#" class="hover:text-black">Service</a>
        <a href="#" class="hover:text-black">Agents</a>
        <a href="#" class="hover:text-black">Contact</a>
      </div>

        <!-- Right side buttons -->
        <div class="flex items-center space-x-4">
          @auth
            <!-- Show username + logout when logged in -->
            <a href="{{ route('profile') }}" class="text-gray-700 hover:text-black">
              {{ auth()->user()->name }}
            </a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
              @csrf
              <button type="submit" 
                      class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                Logout
              </button>
            </form>
          @else
            <!-- Show login + signup when guest -->
            <a href="{{ route('login') }}" 
               class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">
              Login
            </a>
            <a href="{{ route('register') }}" 
               class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
              Sign Up
            </a>
          @endauth
        </div>

      </div>
    </div>
  </nav>

  <!-- Main content fills screen width -->
  <main class="py-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      @yield('content')
    </div>
  </main>

 <!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 grid md:grid-cols-4 gap-12">
    
    <!-- Logo & About -->
    <div>
      <h3 class="text-2xl font-extrabold text-white mb-4">Dwello</h3>
      <p class="text-gray-400 text-sm leading-relaxed">
        Find your dream home with ease. We provide curated listings and expert support to make your home journey stress-free.
      </p>
    </div>

    <!-- About -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">About</h4>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-white transition">Company</a></li>
        <li><a href="#" class="hover:text-white transition">Careers</a></li>
        <li><a href="#" class="hover:text-white transition">Blog</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
        <li><a href="#" class="hover:text-white transition">FAQs</a></li>
        <li><a href="#" class="hover:text-white transition">Contact Us</a></li>
      </ul>
    </div>

    <!-- Social -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">Follow Us</h4>
      <div class="flex space-x-4">
        <a href="#" class="text-gray-400 hover:text-white transition">🌐</a>
        <a href="#" class="text-gray-400 hover:text-white transition">🐦</a>
        <a href="#" class="text-gray-400 hover:text-white transition">📘</a>
        <a href="#" class="text-gray-400 hover:text-white transition">📸</a>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-gray-700 mt-12 pt-6 text-center text-sm text-gray-500">
    © {{ date('Y') }} MyApp — All rights reserved.
  </div>
</footer>


</body>
</html>
