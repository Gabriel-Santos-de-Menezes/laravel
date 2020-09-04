<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel</title>

    @stack('styles')
</head>
<body>
    <div class="container">
        {{-- template --}}
        @yield('content')
    </div>

    {{-- Recurso de stack para usar css e js em partes específicas --}}
    @stack('scripts')
</body>
</html>