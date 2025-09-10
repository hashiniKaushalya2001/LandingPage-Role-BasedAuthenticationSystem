@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- Hero Section -->
<section class="bg-[#fdf7f2] min-h-screen flex items-start">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 py-20 grid md:grid-cols-2 gap-12">
    
    <!-- Left text -->
    <div class="space-y-6 pt-10"> <!-- 👈 push text a little from the top -->
      <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
        Find Your <br>
        <span class="text-brown-800">Dream Home</span>
      </h1>
      <p class="text-lg text-gray-600 max-w-md">
        Explore our curated selection of exquisite properties meticulously tailored 
        to your unique dream home vision.
      </p>
      <a href="{{ route('register') }}" 
         class="inline-block px-8 py-3 bg-black text-white rounded-lg hover:bg-gray-800 transition">
        Sign up
      </a>
    </div>

    <!-- Right image -->
    <div>
      <img src="{{ asset('asset/images/house.png') }}" 
     alt="Dream Home" 
     class="h-48 md:h-72 lg:h-96 w-full object-cover rounded-xl shadow-xl">
    </div>
  </div>
</section>


<!-- Search Bar -->
<section class="relative -mt-12">
  <div class="max-w-4xl mx-auto bg-[#e8d9cf] rounded-xl shadow-md p-6 grid grid-cols-1 md:grid-cols-4 gap-4">
    
    <!-- Location -->
    <div>
      <label class="block text-gray-700 text-sm mb-1">Location</label>
      <input type="text" placeholder="City or Area" 
             class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-brown-400">
    </div>

    <!-- Type -->
    <div>
      <label class="block text-gray-700 text-sm mb-1">Type</label>
      <select class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-brown-400">
        <option>Apartment</option>
        <option>House</option>
        <option>Villa</option>
      </select>
    </div>

    <!-- Price Range -->
    <div>
      <label class="block text-gray-700 text-sm mb-1">Price Range</label>
      <input type="text" placeholder="$200k - $500k" 
             class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-brown-400">
    </div>

    <!-- Button -->
    <div class="flex items-end">
      <button class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition">
        Search
      </button>
    </div>
  </div>
</section>

<!-- Features / Properties Section -->
<section class="bg-[#fdf7f2] py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <h2 class="text-3xl font-bold text-center mb-12">Featured Properties</h2>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('asset/images/house1.png') }}" alt="San Francisco" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-semibold">San Francisco, California</h3>
          <p class="text-gray-500 text-sm">5 Rooms · 3,500 sq ft</p>
          <p class="text-xl font-bold mt-2">$2,500,000</p>
          <a href="#" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Sign Up</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('asset/images/house2.png') }}" alt="Beverly Hills" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-semibold">Beverly Hills, California</h3>
          <p class="text-gray-500 text-sm">3 Beds · 1,500 sq ft</p>
          <p class="text-xl font-bold mt-2">$850,000</p>
          <a href="#" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Sign Up</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('asset/images/house3.png') }}" alt="Palo Alto" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-semibold">Palo Alto, California</h3>
          <p class="text-gray-500 text-sm">6 Rooms · 4,000 sq ft</p>
          <p class="text-xl font-bold mt-2">$3,700,000</p>
          <a href="#" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonials -->
<!-- Testimonials Section -->
<section class="bg-[#fdf7f2] py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <h2 class="text-3xl font-bold text-center mb-12">What People Say About Dwello</h2>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-gray-600">"Dwello has been amazing. They found me the perfect home in San Francisco!"</p>
        <div class="flex items-center mt-4 space-x-4">
          <img src="{{ asset('asset/images/user.png') }}" alt="Sarah" class="w-12 h-12 rounded-full">
          <div>
            <h4 class="font-semibold">Sarah Nguyen</h4>
            <p class="text-sm text-gray-500">San Francisco</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-gray-600">"I had a fantastic experience. Dwello really understood my needs."</p>
        <div class="flex items-center mt-4 space-x-4">
          <img src="{{ asset('asset/images/user2.png') }}" alt="Michael" class="w-12 h-12 rounded-full">
          <div>
            <h4 class="font-semibold">Michael Rodriguez</h4>
            <p class="text-sm text-gray-500">San Diego</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-gray-600">"They helped me buy my dream home. I couldn’t be happier!"</p>
        <div class="flex items-center mt-4 space-x-4">
          <img src="{{ asset('asset/images/user3.png') }}" alt="Emily" class="w-12 h-12 rounded-full">
          <div>
            <h4 class="font-semibold">Emily Johnson</h4>
            <p class="text-sm text-gray-500">Los Angeles</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
