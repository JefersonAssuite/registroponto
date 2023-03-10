<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--FONTE Google-->
        
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css"/>
    <script src="/js/scripts.js"></script>
    </head>

    
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <ul class="navbar-nav">
                        <li class="nav-item">Home</li>
                        </ul>
                    </a>
                    <ul class="navbar-nav">
                    
                        @auth
                        
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Consultar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Férias</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Atestados</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" 
                                class="nav-link" 
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Sair
                                </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Consultar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#" class="nav-link">Férias</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Atestados</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        
       <div class="container-fluid">
        <div class="row">
        @if(session('msg'))
        <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
        </div>
       </div>
        <footer> Jeferson Assuite &copy; 2022 </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>

</html>