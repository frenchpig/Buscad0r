<div class="row m-1">
    @foreach($searcherConfigs as $config)
    <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $config->table_name }}">
            <label class="form-check-label" for="checkbox{{ $config->table_name }}">
                @if($config->table_name === 'DatoRutas')
                    Fibra Oscura
                @elseif($config->table_name === 'DataLoteria')
                    Loteria
                @elseif($config->table_name === 'Data')
                    Equipo
                @else
                    {{ $config->table_name }}
                @endif
            </label>
        </div>
    </div>
    @endforeach
</div>
