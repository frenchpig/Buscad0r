<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador - Presentación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        .slogan {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .description {
            font-size: 1.2rem;
            margin-top: 1rem;
            max-width: 800px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Buscador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="row d-flex justify-content-center m-4">
      <div class="col-3">
        <img src="{{ asset('img/LOGO.jpg') }}" alt="Imagen descriptiva de la aplicación" class="img-thumbnail rounded-circle">
      </div>
    <div class="row justify-content-center">
      <div class="col text-center">
        <h1>Mejora tu eficiencia con Buscador</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 text-center">
        <p>
          Esta aplicación está diseñada para facilitar el ingreso, mantenimiento y administración de datos sobre
          diferentes tipos de servicios. Con Buscador, puedes mejorar los tiempos de trabajo y evitar errores,
          haciendo tu trabajo más eficiente y preciso.
        </p>
      </div>
    </div>
    <div class="container hero">
        <div class="slogan"></div>
        <div class="description">

        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
