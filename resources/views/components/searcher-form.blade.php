@foreach($searcherConfigs as $config)
<div class="row m-2" id="searcher{{ $config->table_name }}" hidden>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $config->table_name }}</h5>
                <div style="display: grid; grid-template-columns: repeat({{ $config->columns_per_row }}, minmax(0, 1fr)); gap: 1rem;">
                    @foreach($config->fields as $field)
                        @if($field->is_visible)
                        <div>
                            <label for="{{ $field->field_id }}" class="form-label mb-1">{{ $field->label }}</label>
                            <input type="{{ $field->type }}" class="form-control" id="{{ $field->field_id }}">
                        </div>
                        @endif
                    @endforeach
                </div>
                
                @php
                    $suffix = $config->table_name === 'DatoRutas' ? 'DatoRuta' : $config->table_name;
                @endphp
                <div class="row mt-4">
                    <div class="col">
                        <button id="searchButton{{ $suffix }}" class="btn btn-primary w-100">Buscar</button>
                    </div>
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <div class="col">
                        <button id="editButton{{ $suffix }}" class="btn btn-secondary w-100">Editar</button>
                    </div>
                    <div class="col">
                        <button id="deleteButton{{ $suffix }}" class="btn btn-danger w-100">Eliminar</button>
                    </div>
                    <div class="col">
                        <button id="addButton{{ $suffix }}" class="btn btn-success w-100">Agregar</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
