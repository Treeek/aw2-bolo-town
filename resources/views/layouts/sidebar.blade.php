<div class="nav-bar">
    <div class="col">
        <a href="/gerenciamento-labs/views/software_list.php">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fas fa-list"></i>
                </span>
                <a href="/gerenciamento-labs/views/software_list.php" class="item-name pl-3">Listar
                    softwares</a>
            </div>
        </a>
        <a href="/gerenciamento-labs/views/software_requisition.php">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fab fa-wpforms"></i>
                </span>
                <a href="/gerenciamento-labs/views/software_requisition.php" class="item-name pl-3">Requisitar
                    software</a>
            </div>
        </a>
        @if (Auth::user()->is_admin)
        <a href="/gerenciamento-labs/views/dashboard.php">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fas fa-columns"></i>
                </span>
                <a href="/gerenciamento-labs/views/dashboard.php" class="item-name pl-3">Dashboard</a>
            </div>
        </a>
        @endif
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