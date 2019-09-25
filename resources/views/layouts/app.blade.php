<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @section('navbar')
            <div class="nav-bar">
                <div class="user-info">
                    <img class="user-pic" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&rounded=true&name=john" alt="">
                    <h2 class="username">
                    </h2>
                </div>
                <div class="col">
                    <a href="/gerenciamento-labs/views/software_list.php">
                        <div class="nav-item row px-4 align-items-center">
                            <span class="item-icon">
                                <i class="fas fa-list"></i>
                            </span>
                            <a href="/gerenciamento-labs/views/software_list.php" class="item-name pl-3">Listar softwares</a>
                        </div>
                    </a>
                    <a href="/gerenciamento-labs/views/software_requisition.php">
                        <div class="nav-item row px-4 align-items-center">
                            <span class="item-icon">
                                <i class="fab fa-wpforms"></i>
                            </span>
                            <a href="/gerenciamento-labs/views/software_requisition.php" class="item-name pl-3">Requisitar software</a>
                        </div>
                    </a>
                    <a href="/gerenciamento-labs/server/logout.php">
                        <div class="nav-item row px-4 align-items-center">
                            <span class="item-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <a href="/gerenciamento-labs/server/logout.php" class="item-name pl-3">Sair</a>
                        </div>
                    </a>
                </div>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>