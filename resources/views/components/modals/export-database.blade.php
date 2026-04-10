<div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-dark bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exportModalLabel">Exportar Base de Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Cómo deseas exportar la base de datos completa?</p>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" id="btnExportSingle">1 Solo Archivo (Múltiples hojas)</button>
                    <button class="btn btn-secondary" id="btnExportMultiple">Múltiples Archivos (1 por tabla)</button>
                </div>
                <div id="exportSpinner" class="text-center mt-3 d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-2">Obteniendo datos y generando Excel...</p>
                </div>
            </div>
        </div>
    </div>
</div>
