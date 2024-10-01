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
                        <div class="col" id="main-content">
                            @yield('content')
                        </div>
                    </div>
                    <!-- .container-fluid -->
                    @include('template.parts.modalsidebar')
    </main> <!-- main -->
</div> <!-- .wrapper -->
@include('template.parts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // When login button is clicked, load the login form via AJAX
        $('#show-login').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('login') }}',
                method: 'GET',
                success: function(response) {
                    $('#main-content').html(response);
                }
            });
        });
    });
    $(document).ready(function() {
        // When login button is clicked, load the login form via AJAX
        $('#show-register').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('register') }}',
                method: 'GET',
                success: function(response) {
                    $('#main-content').html(response);
                }
            });
        });
    });
</script>
</body>
</html>
