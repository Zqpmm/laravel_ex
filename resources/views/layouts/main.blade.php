<!DOCTYPE html>
<html lang="pt-br">

    <style>

        html{
            overflow-x: hidden;
            background-color: #E7E7E7;;
        }
        main{
            background-color: #E7E7E7;
        }

        .nav-principal{
            height: 15vh; background: #6C7A89; background-color: #2D565F;
        }

        .logo{
            font-weight: bold; 
            font-size: 50px; 
            color: #FFFFFF;
        }

        .segundo-nav{
            background-color: #0C2F36; 	
            -moz-box-shadow: inset 0 0 10px #000000; 
            box-shadow: inset 0 0 10px #000000;       
        }

        .sub-titulo{
            font-weight: bold; 
            margin-left: 30px; 
            color: #FFFFFF;
        }
     
        .sub-titulo_inicio{
            font-weight: bold; 
            font-size: 20px; 
            color: #747474;
        }

        .titulo{
            color: #2D2929; 
            margin-left: 15px; 
            font-weight: bold; 
            font-size: 50px;
        }

        .titulo2{
            color: #2D2929; 
            margin-left: 15px; 
            margin-top: 10px; 
            font-size: 20px;
        }

        .autor{
            color: #2D2929; margin-left: 15px; margin-top: 50px; font-size: 15px;
        }

        .conteudo{
            color: #2D2929; text-align: justify; margin-left: 15px; margin-top: 10px; font-size: 25px;
        }

        .linha{
            position: absolute; width: 1000px; margin-left: 12px; margin-top: 30px; height: 0.5px; background: #0D0D0D; transform: matrix(1, 0, 0, -1, 0, 0);
        }

        footer{
            margin-top: 10%;
        }

    </style>    

    <head>
        <meta http-equiv="Content-Type" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
      
        <!-- Bootstrap 5.1.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <div class="navbar navbar bg nav-principal" style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <a href="/"><h1 class="logo">7news</h1></a> 
        </div>
        
        <div class="subnav segundo-nav navbar bg" style="justify-content: center; align-items: center;">
            <div class="subnav-content">
                <a href="/" class="sub-titulo_inicio">Início</a>
                <a class="sub-titulo">Últimas Notícias</a>
                <a class="sub-titulo">Esportes</a>
                <a class="sub-titulo">Saude</a>
                <a class="sub-titulo">Economia</a>
            </div>
        </div>
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />
    
        <!-- Page Content -->
        <main>

            @yield('content')

        </main>
        
    </body>

    <footer>
        <nav  class="navbar fixed-bottom navbar-dark bg-dark">
            <a class="navbar-brand" href="#"></a>
        </nav>
    </footer>
</html>
