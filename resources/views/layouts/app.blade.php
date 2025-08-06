<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Omar Blog')| {{ env('APP_NAME', 'Omar') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js' , 'resources/js/script.js']) {{-- যদি Tailwind ব্যবহার করেন --}}
</head>


<body class="bg-gray-50 font-sans">


    <!-- Navbar -->
    @include('layouts.partials.navbar')

    <!-- Main Contents -->
    @yield('main-content')

    @include('layouts.partials.footer')
</body>

</html>
