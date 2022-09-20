<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
</head>
<body>
    <main class="container mx-auto">
        @yield('content')
    </main>
    <livewire:scripts />
</body>
</html>
