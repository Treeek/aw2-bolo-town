<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Gerenciamento de Softwares dos Labs - @yield('title')</title>
        <link rel="stylesheet" href="/css/layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        @section('navbar')
        <div class="nav-bar">
            <div class="user-info">
                <img class="user-pic" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&rounded=true&name='" alt="">
            </div>
            
            <div class="col">
                <a href="/gerenciamento-labs/views/software_list.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-list"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/software_list.php" class="list-text item-name pl-3">Listar softwares</a>
                    </div>
                </a>
                <a href="/gerenciamento-labs/views/software_requisition.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fab fa-wpforms"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/software_requisition.php" class="list-text item-name pl-3">Requisitar software</a>
                    </div>
                </a>
     
                <a href="/gerenciamento-labs/views/dashboard.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-columns"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/dashboard.php" class="list-text item-name pl-3">Dashboard</a>
                    </div>
                </a>
            
                <a href="/gerenciamento-labs/server/logout.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <a href="/gerenciamento-labs/server/logout.php" class="list-text item-name pl-3">Sair</a>
                    </div>
                </a>
        </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>