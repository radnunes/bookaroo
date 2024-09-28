<!doctype html>
<html lang="en">
<head>
   @include('template.parts.header')
</head>
<body class="vertical  dark  ">
<div class="wrapper">
    @include('template.parts.navbar')

    @include('template.parts.sidebar')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            @yield('content')
                        </div>
                    </div>
                    <!-- .container-fluid -->
                    @include('template.parts.modalsidebar')
    </main> <!-- main -->
</div> <!-- .wrapper -->
@include('template.parts.footer')
</body>
</html>
