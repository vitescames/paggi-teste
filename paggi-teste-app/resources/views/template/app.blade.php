<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paggi Teste API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-paggi">
        <a class="navbar-brand" href="#">Paggi - Teste</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Operações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo url('/'); ?>/cartaoCredito/criar">Adicionar Cartão</a>
                    <a class="dropdown-item" href="<?php echo url('/'); ?>/cartaoCredito/atualizar">Buscar e Atualizar Cartão</a>
                    <a class="dropdown-item" href="<?php echo url('/'); ?>/cartaoCredito/listar">Lista de Cartões</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid jumbo-white">
        <div class="container">
            <h1 class="display-4">Gerenciador de Cartão de Crédito</h1>
            <p class="lead">Busque, atualize, delete ou crie seu cartão de crédito com nossa ferramenta!</p>
        </div>
    </div>

    <div class="container">

        @yield('content')

    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('scripts')
</body>
</html>