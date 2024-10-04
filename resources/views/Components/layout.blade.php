<!doctype html>
<html lang="en">
<head>
    <x-header />
</head>
<body class="vertical  dark  ">
<div class="wrapper">

    <x-navbar />
    <x-sidebar />

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col" id="main-content">

                            {{ $slot }}

                        </div>
                    </div>
                    <!-- .container-fluid -->
        <x-modalsidebar />
    </main> <!-- main -->
</div> <!-- .wrapper -->
<x-footer />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

</script>
</body>
</html>
