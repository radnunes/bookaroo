<!doctype html>
<html lang="en">
<head>
    @include('template.partials.header')
</head>
<body class="vertical  dark  ">
<div class="wrapper">

    @include('template.partials.navbar')
    @include('template.partials.sidebar')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col" id="main-content">

                            @yield('content')

                        </div>
                    </div>
                    <!-- .container-fluid -->
                    @include('template.partials.modalsidebar')
    </main>
</div>
    @include('template.partials.footer')
</body>
</html>
