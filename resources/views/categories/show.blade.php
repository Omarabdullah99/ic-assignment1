@extends('layouts.app')
@section('title', 'IBlog')

@section('main-content')
    <!-- Page Header with Search -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-2">Web Development</h2>
                    <p class="text-lg">Latest articles about web technologies, frameworks, and best practices</p>
                </div>

                <div class="w-full md:w-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search in Web Development..."
                            class="w-full md:w-64 lg:w-96 px-4 py-3 rounded-md text-gray-800 pr-10">
                        <button class="absolute right-3 top-3 text-gray-500 hover:text-blue-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs -->
    <div class="container mx-auto px-4 py-4">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <a href="#"
                            class="ml-1 md:ml-2 text-sm font-medium text-gray-700 hover:text-blue-600">Categories</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <span class="ml-1 md:ml-2 text-sm font-medium text-blue-600">Web Development</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Articles Section -->
        <main class="lg:w-2/3">
            <!-- Category Filters -->
            <div class="bg-white rounded-lg shadow p-4 mb-6">
                <div class="flex flex-wrap gap-2">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">All</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">JavaScript</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">React</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">Vue</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">Angular</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">CSS</button>
                    <button
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">HTML</button>
                </div>
            </div>

            <!-- Sort Options -->
            <div class="flex justify-between items-center mb-6">
                <p class="text-gray-600">Showing 12 of 48 articles</p>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-2">Sort by:</span>
                    <select
                        class="border rounded-md px-3 py-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Newest First</option>
                        <option>Oldest First</option>
                        <option>Most Popular</option>
                        <option>Most Comments</option>
                    </select>
                </div>
            </div>

            <!-- Article List -->
            <div class="space-y-6">
                @include('categories.post')
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="flex items-center space-x-1">
                    <a href="#"
                        class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">1</a>

                    <a href="#" aria-current="page"
                        class="px-3.5 py-2 rounded-md border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600 transition-colors duration-200">2</a>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">3</a>

                    <span
                        class="px-3.5 py-2 rounded-md border border-transparent text-sm font-medium text-gray-500">...</span>

                    <a href="#"
                        class="px-3.5 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-100 transition-colors duration-200">8</a>

                    <a href="#"
                        class="p-2 rounded-md border border-gray-200 bg-white text-gray-500 hover:bg-gray-100 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            @include('layouts.partials.about')

            <!-- Popular Posts -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular in Web Dev</h3>
                <div class="space-y-4">
                    <!-- Post 1 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="Web Development"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">Future of Web Development</h4>
                            <p class="text-sm text-gray-500">May 15, 2023 • 1.2K views</p>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="React"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">React 18 Features</h4>
                            <p class="text-sm text-gray-500">July 5, 2023 • 980 views</p>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="flex items-start">
                        <img src="https://placehold.co/480x200/png" alt="TypeScript"
                            class="w-16 h-16 object-cover rounded-md mr-3">
                        <div>
                            <h4 class="font-medium text-gray-800">TypeScript 5.0</h4>
                            <p class="text-sm text-gray-500">June 22, 2023 • 850 views</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subcategories -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Subcategories</h3>
                <div class="space-y-2">
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">JavaScript</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">24</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">React</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">18</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Vue.js</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Angular</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">9</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">CSS & Design</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">15</span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Performance</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                </div>
            </div>

            <!-- Newsletter Widget -->
            @include('layouts.partials.newsLetter')

            <!-- Tags Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#javascript</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#react</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#vue</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#angular</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#css</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#html</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#webcomponents</a>
                    <a href="#"
                        class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition">#performance</a>
                </div>
            </div>
        </aside>
    </div>
@endsection
