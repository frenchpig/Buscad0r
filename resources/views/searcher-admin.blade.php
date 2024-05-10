<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searcher</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row m-1">
            {{-- Checkbox Servicio --}}
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxServicio">
                    <label class="form-check-label" for="checkboxServicio">
                        Servicio
                    </label>
                </div>
            </div>
            {{-- Checkbox Intralot --}}
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxIntralot">
                    <label class="form-check-label" for="checkboxIntralot">
                        Intralot
                    </label>
                </div>
            </div>
            {{-- Checkbox DataLoteria --}}
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxDataLoteria">
                    <label class="form-check-label" for="checkboxDataLoteria">
                        Data Loteria
                    </label>
                </div>
            </div>
            {{-- Dato Rutas --}}
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxDatoRutas">
                    <label class="form-check-label" for="checkboDatoRutas">
                        Dato Rutas
                    </label>
                </div>
            </div>
            {{-- Data --}}
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxData">
                    <label class="form-check-label" for="checkboxData">
                        Data
                    </label>
                </div>
            </div>
        </div>
        <div class="row m-2" id="searcherServicio" hidden>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Servicio</h5>
                        {{-- Fila 1 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="condicion" class="form-label">Condicion</label>
                                    <input type="text" class="form-control servicio-input" id="condicion">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="ip_loop" class="form-label">IP Loop</label>
                                    <input type="text" class="form-control" id="ip_loop">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Cliente</label>
                                    <input type="text" class="form-control" id="cliente">
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
                                    <input type="text" class="form-control" id="comuna">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="direccion">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 3 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="lan" class="form-label">LAN</label>
                                    <input type="text" class="form-control" id="lan">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="protocolo" class="form-label">Protocolo</label>
                                    <input type="text" class="form-control" id="protocolo">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 4 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="servicio" class="form-label">Servicio</label>
                                    <input type="text" class="form-control" id="servicio">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="vrf" class="form-label">VRF</label>
                                    <input type="text" class="form-control" id="vrf">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="wan" class="form-label">WAN</label>
                                    <input type="text" class="form-control" id="wan">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 5 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nombre_equipo" class="form-label">Nombre Equipo</label>
                                    <input type="text" class="form-control" id="nombre_equipo">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="ip_equipo" class="form-label">IP Equipo</label>
                                    <input type="text" class="form-control" id="ip_equipo">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 6 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="puerta" class="form-label">Puerta</label>
                                    <input type="text" class="form-control" id="puerta">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="vlan" class="form-label">VLAN</label>
                                    <input type="text" class="form-control" id="vlan">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="posiciones" class="form-label">Posiciones</label>
                                    <input type="text" class="form-control" id="posiciones">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button id="searchButtonServicio" class="btn btn-primary w-100">Buscar</button>
                            </div>
                            <div class="col">
                                <button id="editButtonServicio" class="btn btn-secondary w-100">Editar</button>
                            </div>
                            <div class="col">
                                <button id="deleteButtonServicio" class="btn btn-danger w-100">Eliminar</button>
                            </div>
                            <div class="col">
                                <button id="addButtonServicio" class="btn btn-success w-100">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fin Buscador de Servicio --}}
        {{-- Inicio Buscador de Intralot --}}
        <div class="row m-2" id="searcherIntralot" hidden>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Intralot</h5>
                        {{-- Fila 1 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="LOTOS_INTRALOT" class="form-label">Lotos Intralot</label>
                                    <input type="text" class="form-control" id="LOTOS_INTRALOT">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DIRECCION" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="DIRECCION">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="COD_DE_SERVICIO" class="form-label">Codigo De Servicio</label>
                                    <input type="text" class="form-control" id="COD_DE_SERVICIO">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 2 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="CIUDAD" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="CIUDAD">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="RED_LAN" class="form-label">Red LAN</label>
                                    <input type="text" class="form-control" id="RED_LAN">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="MASCARA" class="form-label">Mascara</label>
                                    <input type="text" class="form-control" id="MASCARA">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 3 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="IP_LOOPBACK" class="form-label">IP LOOPBACK</label>
                                    <input type="text" class="form-control" id="IP_LOOPBACK">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="CTO_AGENCIA" class="form-label">Contacto Agencia</label>
                                    <input type="text" class="form-control" id="CTO_AGENCIA">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="TLF_AGENCIA" class="form-label">Telefono Agencia</label>
                                    <input type="text" class="form-control" id="TLF_AGENCIA">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 4 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="EQUIPO" class="form-label">Equipo</label>
                                    <input type="text" class="form-control" id="EQUIPO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Equipo2" class="form-label">Equipo 2</label>
                                    <input type="text" class="form-control" id="Equipo2">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Chip" class="form-label">Chip</label>
                                    <input type="text" class="form-control" id="Chip">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button id="searchButtonIntralot" class="btn btn-primary w-100">Buscar</button>
                            </div>
                            <div class="col">
                                <button id="editButtonIntralot" class="btn btn-secondary w-100">Editar</button>
                            </div>
                            <div class="col">
                                <button id="deleteButtonIntralot" class="btn btn-danger w-100">Eliminar</button>
                            </div>
                            <div class="col">
                              <button id="addButtonIntralot" class="btn btn-success w-100">Agregar</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fin Buscador de Intralot --}}
        {{-- Inicio Buscador Data-Loteria --}}
        <div class="row m-2" id="searcherDataLoteria" hidden>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Loteria</h5>
                        {{-- Fila 1 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Codigo_de_servicio" class="form-label">Codigo De
                                        Servicio</label>
                                    <input type="text" class="form-control" id="DataLoteria_Codigo_de_servicio">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Direccion" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="DataLoteria_Direccion">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Contacto" class="form-label">Contacto</label>
                                    <input type="text" class="form-control" id="DataLoteria_Contacto">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 2 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Comuna" class="form-label">Comuna</label>
                                    <input type="text" class="form-control" id="DataLoteria_Comuna">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Region" class="form-label">Region</label>
                                    <input type="text" class="form-control" id="DataLoteria_Region">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Terminales" class="form-label">Terminales</label>
                                    <input type="text" class="form-control" id="DataLoteria_Terminales">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 3 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Fecha_Implementacion" class="form-label">Fecha
                                        Implementacion</label>
                                    <input type="text" class="form-control" id="DataLoteria_Fecha_Implementacion">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Numero_de_Serie_40F_3G_4G" class="form-label">Numero de
                                        Serie 40F 3G 4G</label>
                                    <input type="text" class="form-control"
                                        id="DataLoteria_Numero_de_Serie_40F_3G_4G">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Numero_de_serie_211E_extender" class="form-label">Numero
                                        de
                                        serie 211E extender</label>
                                    <input type="text" class="form-control"
                                        id="DataLoteria_Numero_de_serie_211E_extender">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 4 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Numero_de_Serie_SIM_CLARO" class="form-label">Numero de
                                        Serie SIM CLARO</label>
                                    <input type="text" class="form-control"
                                        id="DataLoteria_Numero_de_Serie_SIM_CLARO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_1_Datos" class="form-label">Tunnel 1 Datos</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_1_Datos">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_1_Internet" class="form-label">Tunnel 1
                                        Internet</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_1_Internet">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 5 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_RED" class="form-label">RED</label>
                                    <input type="text" class="form-control" id="DataLoteria_RED">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_GW" class="form-label">GW</label>
                                    <input type="text" class="form-control" id="DataLoteria_GW">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_RANGO_DE_IP_DHCP" class="form-label">RANGO DE IP
                                        DHCP</label>
                                    <input type="text" class="form-control" id="DataLoteria_RANGO_DE_IP_DHCP">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 6 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_RANGO_DE_IP_DHCP_2" class="form-label">RANGO DE IP DHCP
                                        2</label>
                                    <input type="text" class="form-control" id="DataLoteria_RANGO_DE_IP_DHCP_2">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_BROADCAST" class="form-label">BROADCAST</label>
                                    <input type="text" class="form-control" id="DataLoteria_BROADCAST">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Cod_Local" class="form-label">Cod Local</label>
                                    <input type="text" class="form-control" id="DataLoteria_Cod_Local">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 7 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Solot" class="form-label">Solot</label>
                                    <input type="text" class="form-control" id="DataLoteria_Solot">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Agente" class="form-label">Agente</label>
                                    <input type="text" class="form-control" id="DataLoteria_Agente">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Horario_de_atencion" class="form-label">Horario de
                                        Atencion</label>
                                    <input type="text" class="form-control" id="DataLoteria_Horario_de_atencion">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 8 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_2_Datos" class="form-label">Tunnel 2 Datos</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_2_Datos">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_3_Datos" class="form-label">Tunnel 3 Datos</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_3_Datos">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_2_Internet" class="form-label">Tunnel 2
                                        Internet</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_2_Internet">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 9 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Tunnel_3_Internet" class="form-label">Tunnel 3
                                        Internet</label>
                                    <input type="text" class="form-control" id="DataLoteria_Tunnel_3_Internet">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X"
                                        class="form-label">Numero de Serie SIM Internet ISP X</label>
                                    <input type="text" class="form-control"
                                        id="DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DataLoteria_IP_Loopback_32" class="form-label">IP Loopback 32</label>
                                    <input type="text" class="form-control" id="DataLoteria_IP_Loopback_32">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 10 --}}
                        <div class="row">
                            <div class="col">
                                <button id="searchButtonDataLoteria" class="btn btn-primary w-100">Buscar</button>
                            </div>
                            <div class="col">
                                <button id="editButtonDataLoteria" class="btn btn-secondary w-100">Editar</button>
                            </div>
                            <div class="col">
                                <button id="deleteButtonDataLoteria" class="btn btn-danger w-100">Eliminar</button>
                            </div>
                            <div class="col">
                              <button id="addButtonDataLoteria" class="btn btn-success w-100">Agregar</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fin Buscador Data-Loteria --}}
        {{-- Inicio Buscador de DatoRutas --}}
        <div class="row m-2" id="searcherDatoRutas" hidden>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DatoRutas</h5>
                        {{-- Fila 1 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_CLIENTE" class="form-label">Cliente</label>
                                    <input type="text" class="form-control" id="DatoRutas_CLIENTE">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_NUMERO_DE_SERVICIO" class="form-label">Numero de
                                        Servicio</label>
                                    <input type="text" class="form-control" id="DatoRutas_NUMERO_DE_SERVICIO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_TIPO_ENLACE" class="form-label">Tipo de Enlace</label>
                                    <input type="text" class="form-control" id="DatoRutas_TIPO_ENLACE">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 2 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_LADO_A" class="form-label">Lado A</label>
                                    <input type="text" class="form-control" id="DatoRutas_LADO_A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_NODO" class="form-label">Nodo</label>
                                    <input type="text" class="form-control" id="DatoRutas_NODO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_RUTA" class="form-label">Ruta</label>
                                    <input type="text" class="form-control" id="DatoRutas_RUTA">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 3 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_RACK_A" class="form-label">Rack A</label>
                                    <input type="text" class="form-control" id="DatoRutas_RACK_A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_ODF_A" class="form-label">ODF A</label>
                                    <input type="text" class="form-control" id="DatoRutas_ODF_A">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_POS_A" class="form-label">Posición A</label>
                                    <input type="text" class="form-control" id="DatoRutas_POS_A">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 4 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_LADO_B" class="form-label">Lado B</label>
                                    <input type="text" class="form-control" id="DatoRutas_LADO_B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_SALA" class="form-label">Sala</label>
                                    <input type="text" class="form-control" id="DatoRutas_SALA">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_RACK_B" class="form-label">Rack B</label>
                                    <input type="text" class="form-control" id="DatoRutas_RACK_B">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 5 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_ODF_B" class="form-label">ODF B</label>
                                    <input type="text" class="form-control" id="DatoRutas_ODF_B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_POS_B" class="form-label">Posición B</label>
                                    <input type="text" class="form-control" id="DatoRutas_POS_B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_NIVELES_HISTORICOS" class="form-label">Niveles
                                        Históricos</label>
                                    <input type="text" class="form-control" id="DatoRutas_NIVELES_HISTORICOS">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 6 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="DatoRutas_Seguimiento_y_contactos" class="form-label">Seguimiento y
                                        Contactos</label>
                                    <input type="text" class="form-control"
                                        id="DatoRutas_Seguimiento_y_contactos">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button id="searchButtonDatoRuta" class="btn btn-primary w-100">Buscar</button>
                            </div>
                            <div class="col">
                                <button id="editButtonDatoRuta" class="btn btn-secondary w-100">Editar</button>
                            </div>
                            <div class="col">
                                <button id="deleteButtonDatoRuta" class="btn btn-danger w-100">Eliminar</button>
                            </div>
                            <div class="col">
                              <button id="addButtonDatoRuta" class="btn btn-success w-100">Agregar</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fin Buscador de DatoRutas --}}
        {{-- Inicio Buscador de Data --}}
        <div class="row m-2" id="searcherData" hidden>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data</h5>
                        {{-- Fila 1 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Equipo" class="form-label">Equipo</label>
                                    <input type="text" class="form-control" id="Data_Equipo">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Comuna" class="form-label">Comuna</label>
                                    <input type="text" class="form-control" id="Data_Comuna">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Sitio" class="form-label">Sitio</label>
                                    <input type="text" class="form-control" id="Data_Sitio">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 2 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Proveedor" class="form-label">Proveedor</label>
                                    <input type="text" class="form-control" id="Data_Proveedor">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Familia" class="form-label">Familia</label>
                                    <input type="text" class="form-control" id="Data_Familia">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Plataforma" class="form-label">Plataforma</label>
                                    <input type="text" class="form-control" id="Data_Plataforma">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 3 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_IP" class="form-label">IP</label>
                                    <input type="text" class="form-control" id="Data_IP">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Descriptor" class="form-label">Descriptor</label>
                                    <input type="text" class="form-control" id="Data_Descriptor">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_Contraseña" class="form-label">Contraseña</label>
                                    <input type="text" class="form-control" id="Data_Contraseña">
                                </div>
                            </div>
                        </div>
                        {{-- Fila 4 --}}
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="Data_N_Nodo" class="form-label">N Nodo</label>
                                    <input type="text" class="form-control" id="Data_N_Nodo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button id="searchButtonData" class="btn btn-primary w-100">Buscar</button>
                            </div>
                            <div class="col">
                                <button id="editButtonData" class="btn btn-secondary w-100">Editar</button>
                            </div>
                            <div class="col">
                                <button id="deleteButtonData" class="btn btn-danger w-100">Eliminar</button>
                            </div>
                            <div class="col">
                              <button id="addButtonData" class="btn btn-success w-100">Agregar</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fin Buscador de Data --}}

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('js/searcher.js') }}"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
    <script src="{{ asset('js/deleter.js') }}"></script>
</body>

</html>
