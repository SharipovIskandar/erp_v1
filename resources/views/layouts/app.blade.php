<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    @vite('resources/css/app.css') <!-- TailwindCSS bilan ishlash uchun -->
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

@include('partials.header')
@include('partials.navbar')

<main class="container mx-auto p-4">
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>
