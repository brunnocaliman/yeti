<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="https://yeti-acre.c9.io/js/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
    </head>
    <body>
        @section('sidebar')
            <a href="/equipamento/mostrar.php" title="mostrar equipamentos">[mostrar equipamentos]</a>
            <a href="/equipamento/cadastrar" title="cadastrar equipamento">[cadastrar equipamento]</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>