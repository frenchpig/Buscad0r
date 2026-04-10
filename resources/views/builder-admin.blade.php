@extends('layouts.app')
@section('title', 'Constructor de Tablas')

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortables = document.querySelectorAll('.sortable-list');
        sortables.forEach(list => {
            new Sortable(list, {
                animation: 150,
                handle: '.drag-handle',
                ghostClass: 'bg-light',
            });
        });

        document.getElementById('saveBuilderBtn').addEventListener('click', function() {
            const btn = this;
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Guardando...';
            
            const payload = { tables: {} };
            
            document.querySelectorAll('.table-config-block').forEach(block => {
                const tableName = block.dataset.tableName;
                const columnsPerRow = block.querySelector('.columns-input').value;
                
                payload.tables[tableName] = {
                    columns_per_row: columnsPerRow,
                    fields: []
                };

                const fields = block.querySelectorAll('.field-item');
                fields.forEach((field, index) => {
                    payload.tables[tableName].fields.push({
                        id: field.dataset.id,
                        order: index,
                        is_visible: field.querySelector('.visibility-toggle').checked ? 1 : 0
                    });
                });
            });

            fetch('{{ route('builder.update') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(payload)
            }).then(r => r.json()).then(data => {
                if(data.success) {
                    alert('Configuración guardada exitosamente.');
                }
            }).catch(e => {
                alert('Ocurrió un error guardando.');
            }).finally(() => {
                btn.disabled = false;
                btn.innerHTML = '<i class="bi bi-save"></i> Guardar Configuración Global';
            });
        });
    });
</script>
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-tools"></i> Constructor de Buscadores</h2>
    <button id="saveBuilderBtn" class="btn btn-success"><i class="bi bi-save"></i> Guardar Configuración Global</button>
</div>

<div class="row">
    @foreach($configs as $config)
    <div class="col-lg-6 mb-4">
        <div class="card table-config-block" data-table-name="{{ $config->table_name }}">
            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ $config->table_name === 'DatoRutas' ? 'DatoRutas (Fibra Oscura)' : $config->table_name }}</h5>
                <div class="d-flex align-items-center gap-2">
                    <label class="mb-0 text-white small">Columnas/Fila:</label>
                    <input type="number" class="form-control form-control-sm columns-input text-center" style="width: 70px" value="{{ $config->columns_per_row }}" min="1" max="12">
                </div>
            </div>
            <ul class="list-group list-group-flush sortable-list" style="min-height: 50px;">
                @foreach($config->fields as $field)
                <li class="list-group-item d-flex justify-content-between align-items-center field-item" data-id="{{ $field->id }}" style="background-color: #2b3035;">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-grip-vertical text-muted drag-handle" style="cursor: grab; font-size: 1.5rem;"></i>
                        <div>
                            <strong>{{ $field->label }}</strong>
                            <small class="text-muted d-block">ID Lógico: <code>{{ $field->field_id }}</code> | Tipo: {{ $field->type }}</small>
                        </div>
                    </div>
                    <div class="form-check form-switch m-0 fs-5">
                        <input class="form-check-input visibility-toggle" type="checkbox" role="switch" {{ $field->is_visible ? 'checked' : '' }}>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection
