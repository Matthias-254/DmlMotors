<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DML Motors | Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com -->
        <style>
            body{
                background-color: black;
                color: white;
            }
            
            header {
                font-size: 1.3rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 20px;
                position: relative;
            }

            .dml-text {
                margin-right: auto;
                color: #4caf50;
            }

            h1 {
                font-size: 3rem;
                position: absolute;
                text-align: center;
                margin: 0;
                left: 50%;
                transform: translateX(-50%);
                overflow: hidden;
            }

            h1::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 255, 0, 0) 0%, #4caf50 50%, rgba(0, 255, 0, 0) 100%);
            animation: shine 5s infinite;
        }
        
        @keyframes shine {
            0% {
                left: -100%;
            }
            
            50%{
                left: 100%;
            }

            100% {
                left: 100%;
            }
        }

            nav {
                margin-left: auto;
            }

            nav a {
                margin-left: 10px;
                text-decoration: none;
                color: white;
                background-color: #4caf50;
                padding: 5px 15px;
                border-radius: 5px;
            }

            main{
                text-align: center;
                width: 60%;
                margin: 80px auto;
            }

            main img{
                width: 100%;
                height: auto;
            }

        </style>
    </head>
    <body>
        <header>
            <p class="dml-text">DML Motors</p>
            <h1>Welcome</h1>
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main>
                <img src="{{ URL('img/dmlmotorslogo.jpg') }}" alt="DML Motors logo">
        </main>

        <footer>
            
        </footer>
    </body>
</html>
