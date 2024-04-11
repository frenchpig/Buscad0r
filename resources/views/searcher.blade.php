<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Loader</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row m-2">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Servicio</h5>
            {{-- Fila 1 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="condicion" class="form-label">Condicion</label>
                  <input type="text" class="form-control" id="condicion" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="ip_loop" class="form-label">IP Loop</label>
                  <input type="text" class="form-control" id="ip_loop" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="cliente" class="form-label">Cliente</label>
                  <input type="text" class="form-control" id="cliente" readonly>
                </div>
              </div>
            </div>
            {{-- Fila 2 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="cod" class="form-label">Codigo de Servicio</label>
                  <input type="text" class="form-control" id="cod">
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="comuna" class="form-label">Comuna</label>
                  <input type="text" class="form-control" id="comuna" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="direccion" class="form-label">Direccion</label>
                  <input type="text" class="form-control" id="direccion" readonly>
                </div>
              </div>
            </div>
            {{-- Fila 3 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="lan" class="form-label">LAN</label>
                  <input type="text" class="form-control" id="lan" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="protocolo" class="form-label">Protocolo</label>
                  <input type="text" class="form-control" id="protocolo" readonly>
                </div>
              </div>
            </div>
            {{-- Fila 4 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="servicio" class="form-label">Servicio</label>
                  <input type="text" class="form-control" id="servicio" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="vrf" class="form-label">VRF</label>
                  <input type="text" class="form-control" id="vrf" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="wan" class="form-label">WAN</label>
                  <input type="text" class="form-control" id="wan" readonly>
                </div>
              </div>
            </div>
            {{-- Fila 5 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="nombre_equipo" class="form-label">Nombre Equipo</label>
                  <input type="text" class="form-control" id="nombre_equipo" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="ip_equipo" class="form-label">IP Equipo</label>
                  <input type="text" class="form-control" id="ip_equipo" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" readonly>
                </div>
              </div>
            </div>
            {{-- Fila 6 --}}
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="puerta" class="form-label">Puerta</label>
                  <input type="text" class="form-control" id="puerta" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="vlan" class="form-label">VLAN</label>
                  <input type="text" class="form-control" id="vlan" readonly>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="posiciones" class="form-label">Posiciones</label>
                  <input type="text" class="form-control" id="posiciones" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <button id="searchButtonServicio" class="btn btn-primary w-100">Buscar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/searcher.js') }}"></script>
</body>
</html>
