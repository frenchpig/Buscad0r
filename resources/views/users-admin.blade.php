<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searcher</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Buscador</a>
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
          <li class="nav-item">
            <a class="nav-link" href="/admin-buscar">Buscador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
      <div class="row m-1">
        <!-- Main Content -->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
              <h5 class="card-title">Listado de Usuarios</h5>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal">
                  <i class="bi bi-person-plus-fill"></i> Crear Usuario
              </button>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">Error al crear el usuario. Revisa los datos.</div>
            @endif

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Rol</th>
                  <!-- Buttons -->
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>
                      {{ $user->name }}
                      @if($user->password_reset_requested)
                        <span class="badge bg-danger ms-2"><i class="bi bi-exclamation-triangle"></i> Restauración Solicitada</span>
                      @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <div class="d-flex gap-2">
                        <form action="{{ route('generate-code-user', $user->id) }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-warning" title="Generar Código Temporal" onclick="return confirm('¿Estás seguro que deseas generar un nuevo código temporal y sobrescribir la contraseña actual para este usuario?')">
                            <i class="bi bi-key-fill"></i>
                          </button>
                        </form>
                        
                        <form action="{{ route('delete-user-id', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">
                            <i class="bi bi-trash-fill"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal Crear Usuario -->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form class="modal-content" action="{{ route('store-user') }}" method="POST">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="createUserModalLabel">Crear Nuevo Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning">
              <small><b>Nota:</b> El usuario será creado con la contraseña inicial <code>123456</code>. Al modelo se le forzará cambiarla en su primer inicio de sesión.</small>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Rol</label>
              <select class="form-select" id="role" name="role" required>
                <option value="user">Usuario (Lectura / Gestores)</option>
                <option value="admin">Administrador (Control Total)</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear Usuario</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
