<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    <!-- <script src="js/champsInput.js" defer></script> -->
    <script src="../js/champsInput.js" defer></script>


</head>
<body>
    <main class="main_admin">
        @yield('content')
    </main>
</body>
</html>