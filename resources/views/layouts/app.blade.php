<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') &mdash; SIBATIK</title>

    <!-- General CSS Files -->
    <link rel="stylesheet"
        href="{{ asset('admin/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet"
        href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/css/components.css') }}">

</head>
</head>

<body>
    @auth
        @if(auth('web')->user()->role == 'admin')
            <div id="app">
                <div class="main-wrapper">
                    <!-- Header -->
                    @include('components.header')

                    <!-- Sidebar -->
                    @include('components.sidebar')

                    <!-- Content -->
                    @yield('main')

                    <!-- Footer -->
                    @include('components.footer')
                </div>
            </div>
        @else
            <script>
                window.location = "{{ route('user.index') }}";
            </script>
        @endif
        @else
            <script>
                window.location = "{{ route('user.index') }}";
            </script>
    @endauth

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('admin/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('admin/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/stisla.js') }}"></script>
    <script src="https://kit.fontawesome.com/53d82b54ee.js" crossorigin="anonymous"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
</body>

</html>
