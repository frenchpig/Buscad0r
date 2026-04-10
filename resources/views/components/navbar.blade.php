<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ Auth::check() && Auth::user()->role === 'admin' ? '/admin-buscar' : '/' }}">Buscador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">
                            Salir
                        </button>
                    </form>
                </li>
                @if(Auth::check() && Auth::user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="/users">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exportModal">Exportar Base de Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service_loader">Cargar Base de Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="/admin/builder"><i class="bi bi-tools"></i> Generador de Bloques</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
