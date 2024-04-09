<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Loader</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-3">
            {{-- Cargador de Servicios --}}
            <div class="mb-3">
                <label for="fileInput" class="form-label">Seleccione el archivo de servicios:</label>
                <input type="file" class="form-control" id="fileInput" name="fileInput" accept=".xls, .xlsx">
            </div>
                <button id="loadButton" class="btn btn-primary">Cargar</button>
        </div>
        <div class="col-3">
            {{-- Cargador de Intralot --}}
            <div class="mb-3">
                <label for="fileInputIntralot" class="form-label">Seleccione el archivo de Intralot:</label>
                <input type="file" class="form-control" id="fileInputIntralot" name="fileInputIntralot" accept=".xls, .xlsx">
            </div>
                <button id="loadButtonIntralot" class="btn btn-primary">Cargar</button>
        </div>
        <div class="col-3">
            {{-- Cargador de Data-Loteria --}}
            <div class="mb-3">
                <label for="fileInputDataLoteria" class="form-label">Seleccione el archivo de Data Loteria:</label>
                <input type="file" class="form-control" id="fileInputDataLoteria" name="fileInputDataLoteria" accept=".xls, .xlsx">
            </div>
                <button id="loadButtonDataLoteria" class="btn btn-primary">Cargar</button>
        </div>
        <div class="col-3">
            {{-- Cargador de Dato-Rutas --}}
            <div class="mb-3">
                <label for="fileInputDatoRutas" class="form-label">Seleccione el archivo de Dato Rutas:</label>
                <input type="file" class="form-control" id="fileInputDatoRutas" name="fileInputDatoRutas" accept=".xls, .xlsx">
            </div>
                <button id="loadButtonDatoRutas" class="btn btn-primary">Cargar</button>
        </div>
        <div class="col-3">
            {{-- Cargador de Data --}}
            <div class="mb-3">
                <label for="fileInputData" class="form-label">Seleccione el archivo de Data:</label>
                <input type="file" class="form-control" id="fileInputData" name="fileInputData" accept=".xls, .xlsx">
            </div>
                <button id="loadButtonData" class="btn btn-primary">Cargar</button>
        </div>
    </div>
    
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/tables_loader.js') }}"></script>
</body>
</html>
