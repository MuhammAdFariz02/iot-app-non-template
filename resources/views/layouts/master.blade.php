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
    @include('layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Include sidebar -->
            @include('layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Include topbar (opsional, jika ada) -->
                @include('layouts.topbar')

                <!-- Konten utama halaman -->
                <div class="content">
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
