<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="../js/menu-hamburger.js" defer></script>
    <title>@yield('title')</title>
</head>

<body>
    <header class="header">
        <div class="navbar-admin">
            <div class="navbar-admin-left">
                <a href="{{ route('home') }}" class="knalson-title-page-default">KNALSON <span class="knalson">Music</span></a>
            </div>

            <div class="navbar-admin-right navbar-menu">
                <li class="li-lien"><a href="{{ route('adminimage.index') }}" class="">Images</a></li>
                <li class="li-lien"><a href="{{ route('adminevent.index') }}" class="">Concerts et evenements</a></li>
                <li class="li-lien"><a href="{{ route('adminalbum.index') }}" class="">Sorties musicales</a></li>
                @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-logout">Se deconnecter</button>    
                </form>
                @endauth
            </div>

            <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
                <span class="line l1"></span>
                <span class="line l2"></span>
                <span class="line l3"></span>
            </button>
        </div>
    </header>
    <main class="content-page-accueil">
        @yield('content')
    </main>
</body>
</html>
