<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Zhoot' }}</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="flex flex-col min-h-screen">

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenu principal --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
