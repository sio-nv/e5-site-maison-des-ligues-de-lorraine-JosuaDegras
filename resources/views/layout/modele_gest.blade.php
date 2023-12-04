<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('layout.entete')
</head>

<body class="size-1140">
    <!-- MENU -->
    @include('layout.menu_gest')

    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        @yield('content')      
    </main>

    @include('layout.pied')

</body>

</html>