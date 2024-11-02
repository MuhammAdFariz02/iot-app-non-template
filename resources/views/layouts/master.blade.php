<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Include head-css -->
    @include('layouts.head-css')
</head>
<body>
    <!-- Include navbar -->
    @include('layouts.topbar')
    @include('layouts.sidebar')

    <div class="container-fluid">
        <div class="row mt-5 pt-2">
            <!-- Include sidebar -->

            <main class="">
                <!-- Konten utama halaman -->
                <div class="content mt-2">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Include footer -->
    @include('layouts.footer')

    <!-- Include script tambahan (opsional) -->
    @include('layouts.scripts')
</body>
</html>
