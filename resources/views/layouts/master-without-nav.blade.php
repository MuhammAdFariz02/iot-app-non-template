<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layouts.head-css') <!-- Menghubungkan CSS dan JS dari head-css.blade.php -->
</head>
<body class="bg-light">
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
