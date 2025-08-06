@extends('layouts.app')
@section('title', 'IBlog')

@section('main-content')
    <!-- Hero Section -->
    @include('home.hero')

    <!-- Featured Posts -->
    @include('posts.featured')
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        @include('posts.recent')

        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            @include('layouts.partials.about')

            <!-- Categories Widget -->
            @include('layouts.partials.categories')

            <!-- Newsletter Widget -->
            @include('layouts.partials.newsLetter')
        </aside>
    </div>
@endsection
