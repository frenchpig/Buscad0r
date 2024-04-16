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
    {{-- Fin Buscador de Servicio --}}
    {{-- Inicio Buscador de Intralot --}}
    <div class="row m-2">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Intralot</h5>
                  {{-- Fila 1 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="LOTOS_INTRALOT" class="form-label">Lotos Intralot</label>
                              <input type="text" class="form-control" id="LOTOS_INTRALOT" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DIRECCION" class="form-label">Direccion</label>
                              <input type="text" class="form-control" id="DIRECCION" readonly>
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
                              <input type="text" class="form-control" id="CIUDAD" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="RED_LAN" class="form-label">Red LAN</label>
                              <input type="text" class="form-control" id="RED_LAN" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="MASCARA" class="form-label">Mascara</label>
                              <input type="text" class="form-control" id="MASCARA" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 3 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="IP_LOOPBACK" class="form-label">IP LOOPBACK</label>
                              <input type="text" class="form-control" id="IP_LOOPBACK" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="CTO_AGENCIA" class="form-label">Contacto Agencia</label>
                              <input type="text" class="form-control" id="CTO_AGENCIA" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="TLF_AGENCIA" class="form-label">Telefono Agencia</label>
                              <input type="text" class="form-control" id="TLF_AGENCIA" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 4 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="EQUIPO" class="form-label">Equipo</label>
                              <input type="text" class="form-control" id="EQUIPO" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="Equipo2" class="form-label">Equipo 2</label>
                              <input type="text" class="form-control" id="Equipo2" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="Chip" class="form-label">Chip</label>
                              <input type="text" class="form-control" id="Chip" readonly>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <button id="searchButtonIntralot" class="btn btn-primary w-100">Buscar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    {{-- Fin Buscador de Intralot --}}
    {{-- Inicio Buscador  Data-Loteria--}}
    <div class="row m-2">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Data Loteria</h5>
                  {{-- Fila 1 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Codigo_de_servicio" class="form-label">Codigo De Servicio</label>
                              <input type="text" class="form-control" id="DataLoteria_Codigo_de_servicio">
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Direccion" class="form-label">Direccion</label>
                              <input type="text" class="form-control" id="DataLoteria_Direccion" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Contacto" class="form-label">Contacto</label>
                              <input type="text" class="form-control" id="DataLoteria_Contacto" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 2 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Comuna" class="form-label">Comuna</label>
                              <input type="text" class="form-control" id="DataLoteria_Comuna" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Region" class="form-label">Region</label>
                              <input type="text" class="form-control" id="DataLoteria_Region" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Terminales" class="form-label">Terminales</label>
                              <input type="text" class="form-control" id="DataLoteria_Terminales" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 3 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Fecha_Implementacion" class="form-label">Fecha Implementacion</label>
                              <input type="text" class="form-control" id="DataLoteria_Fecha_Implementacion" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Numero_de_Serie_40F_3G_4G" class="form-label">Numero de Serie 40F 3G 4G</label>
                              <input type="text" class="form-control" id="DataLoteria_Numero_de_Serie_40F_3G_4G" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Numero_de_serie_211E_extender" class="form-label">Numero de serie 211E extender</label>
                              <input type="text" class="form-control" id="DataLoteria_Numero_de_serie_211E_extender" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 4 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Numero_de_Serie_SIM_CLARO" class="form-label">Numero de Serie SIM CLARO</label>
                              <input type="text" class="form-control" id="DataLoteria_Numero_de_Serie_SIM_CLARO" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_1_Datos" class="form-label">Tunnel 1 Datos</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_1_Datos" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_1_Internet" class="form-label">Tunnel 1 Internet</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_1_Internet" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 5 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_RED" class="form-label">RED</label>
                              <input type="text" class="form-control" id="DataLoteria_RED" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_GW" class="form-label">GW</label>
                              <input type="text" class="form-control" id="DataLoteria_GW" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_RANGO_DE_IP_DHCP" class="form-label">RANGO DE IP DHCP</label>
                              <input type="text" class="form-control" id="DataLoteria_RANGO_DE_IP_DHCP" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 6 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_RANGO_DE_IP_DHCP_2" class="form-label">RANGO DE IP DHCP 2</label>
                              <input type="text" class="form-control" id="DataLoteria_RANGO_DE_IP_DHCP_2" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_BROADCAST" class="form-label">BROADCAST</label>
                              <input type="text" class="form-control" id="DataLoteria_BROADCAST" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Cod_Local" class="form-label">Cod Local</label>
                              <input type="text" class="form-control" id="DataLoteria_Cod_Local" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 7 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Solot" class="form-label">Solot</label>
                              <input type="text" class="form-control" id="DataLoteria_Solot" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Agente" class="form-label">Agente</label>
                              <input type="text" class="form-control" id="DataLoteria_Agente" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Horario_de_atencion" class="form-label">Horario de Atencion</label>
                              <input type="text" class="form-control" id="DataLoteria_Horario_de_atencion" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 8 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_2_Datos" class="form-label">Tunnel 2 Datos</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_2_Datos" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_3_Datos" class="form-label">Tunnel 3 Datos</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_3_Datos" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_2_Internet" class="form-label">Tunnel 2 Internet</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_2_Internet" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 9 --}}
                  <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Tunnel_3_Internet" class="form-label">Tunnel 3 Internet</label>
                              <input type="text" class="form-control" id="DataLoteria_Tunnel_3_Internet" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X" class="form-label">Numero de Serie SIM Internet ISP X</label>
                              <input type="text" class="form-control" id="DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X" readonly>
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="DataLoteria_IP_Loopback_32" class="form-label">IP Loopback 32</label>
                              <input type="text" class="form-control" id="DataLoteria_IP_Loopback_32" readonly>
                          </div>
                      </div>
                  </div>
                  {{-- Fila 10 --}}
                  <div class="row">
                      <div class="col">
                          <button id="searchButtonDataLoteria" class="btn btn-primary w-100">Buscar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    {{-- Fin Buscador Data-Loteria --}}
  </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/searcher.js') }}"></script>
</body>
</html>
