<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Buscad0r</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #212529;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
            background-color: #2b3035;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h4 class="text-center mb-1">Restablecer Contraseña</h4>
        <p class="text-center text-muted small mb-4">Ingresa tu correo para emitir un aviso al administrador del sistema.</p>
        
        @if (session('status'))
            <div class="alert alert-success mb-4 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <div class="mb-4">
                <label for="email" class="form-label">Correo Electrónico</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-warning w-100 mb-3"><i class="bi bi-send-fill"></i> Notificar a Admin</button>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-decoration-none small"><i class="bi bi-arrow-left"></i> Volver al Login</a>
            </div>
        </form>
    </div>
</body>
</html>
