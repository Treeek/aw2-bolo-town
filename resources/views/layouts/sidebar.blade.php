<div class="nav-bar">
    <div class="col">
        <a href="{{ url('/list_softwares') }}">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fas fa-list"></i>
                </span>
                <span class="item-name pl-3">Listar
                    softwares</span>
            </div>
        </a>
        <a href="{{ url('/request') }}">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fab fa-wpforms"></i>
                </span>
                <span class="item-name pl-3">Requisitar
                    software</span>
            </div>
        </a>
        @if (Auth::user()->is_admin)
        <a href="{{ url('/dashboard') }}">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fas fa-columns"></i>
                </span>
                <span class="item-name pl-3">Dashboard</span>
            </div>
        </a>
        @endif
        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <div class="nav-item row px-4 align-items-center">
                <span class="item-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="item-name pl-3">
                    Sair
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </a>
    </div>
</div>