let searchButtonServicio = document.getElementById('searchButtonServicio');
let searchButtonIntralot = document.getElementById('searchButtonIntralot');
let searchButtonDataLoteria = document.getElementById('searchButtonDataLoteria');
let searchButtonDatoRuta = document.getElementById('searchButtonDatoRuta');
let searchButtonData = document.getElementById('searchButtonData');

searchButtonServicio.addEventListener('click', function(){
  let codigoInput  = document.getElementById('cod');
  let codigo = codigoInput.value;
  let data = {codigo: codigo}
  searchToDataBase(data,'/service-search', function(servicio){
    let caracteristicas = ['condicion', 'ip_loop', 'cliente','comuna','direccion','lan','protocolo','servicio','vrf','wan','nombre_equipo','ip_equipo','descripcion','puerta','vlan','posiciones']
    replaceDataInputs(caracteristicas,caracteristicas,servicio);
  });
})

searchButtonIntralot.addEventListener('click',function(){
  let codigoInput = document.getElementById('COD_DE_SERVICIO');
  let codigo = codigoInput.value; 
  let data = {codigo: codigo}
  searchToDataBase(data,'/intralot-search', function(intralot){
    let caracteristicas = ['LOTOS_INTRALOT','DIRECCION','CIUDAD','RED_LAN','MASCARA','IP_LOOPBACK','CTO_AGENCIA','TLF_AGENCIA','EQUIPO','Equipo2','Chip'];
    replaceDataInputs(caracteristicas,caracteristicas,intralot);
  });
})

searchButtonDataLoteria.addEventListener('click',function(){
  let codigoInput = document.getElementById('DataLoteria_Codigo_de_servicio');
  let codigo = codigoInput.value;
  let data = {codigo: codigo}
  searchToDataBase(data,'/dataloteria-search', function(dataloteria){
    let caracteristicas = ['RED','GW','RANGO_DE_IP_DHCP','RANGO_DE_IP_DHCP_2','BROADCAST','Cod_Local','Solot','Codigo_de_servicio','Agente','Direccion','Contacto','Horario_de_atencion','Comuna','Region','Terminales','Fecha_Implementacion','Numero_de_Serie_40F_3G_4G','Numero_de_serie_211E_extender','Numero_de_Serie_SIM_CLARO','Tunnel_1_Datos','Tunnel_2_Datos','Tunnel_3_Datos','Tunnel_1_Internet','Tunnel_2_Internet','Tunnel_3_Internet','Numero_de_Serie_SIM_Internet_ISP_X','IP_Loopback_32']
    let ids = ["DataLoteria_RED","DataLoteria_GW","DataLoteria_RANGO_DE_IP_DHCP","DataLoteria_RANGO_DE_IP_DHCP_2","DataLoteria_BROADCAST","DataLoteria_Cod_Local","DataLoteria_Solot","DataLoteria_Codigo_de_servicio","DataLoteria_Agente","DataLoteria_Direccion","DataLoteria_Contacto","DataLoteria_Horario_de_atencion","DataLoteria_Comuna","DataLoteria_Region","DataLoteria_Terminales","DataLoteria_Fecha_Implementacion","DataLoteria_Numero_de_Serie_40F_3G_4G","DataLoteria_Numero_de_serie_211E_extender","DataLoteria_Numero_de_Serie_SIM_CLARO","DataLoteria_Tunnel_1_Datos","DataLoteria_Tunnel_2_Datos","DataLoteria_Tunnel_3_Datos","DataLoteria_Tunnel_1_Internet","DataLoteria_Tunnel_2_Internet","DataLoteria_Tunnel_3_Internet","DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X","DataLoteria_IP_Loopback_32"
  ];
    replaceDataInputs(caracteristicas,ids,dataloteria);
  });
});

searchButtonDatoRuta.addEventListener('click',function(){
  let codigoInput = document.getElementById('DatoRutas_NUMERO_DE_SERVICIO');
  let codigo = codigoInput.value;
  let data = {codigo:codigo};
  searchToDataBase(data,'/datorutas-search',function(datoRuta){
    let caracteristicas = ['CLIENTE','TIPO_ENLACE','LADO_A','NODO','RUTA','RACK_A','ODF_A','POS_A','LADO_B','SALA','RACK_B','ODF_B','POS_B','NIVELES_HISTORICOS','Seguimiento_y_contactos'];
    let ids = ["DatoRutas_CLIENTE","DatoRutas_TIPO_ENLACE","DatoRutas_LADO_A","DatoRutas_NODO","DatoRutas_RUTA","DatoRutas_RACK_A","DatoRutas_ODF_A","DatoRutas_POS_A","DatoRutas_LADO_B","DatoRutas_SALA","DatoRutas_RACK_B","DatoRutas_ODF_B","DatoRutas_POS_B","DatoRutas_NIVELES_HISTORICOS","DatoRutas_Seguimiento_y_contactos"];
    replaceDataInputs(caracteristicas,ids,datoRuta);
  });
});

searchButtonData.addEventListener('click',function(){
  let equipoInput = document.getElementById('Data_Equipo');
  let equipo = equipoInput.value;
  let data = {codigo: equipo};
  searchToDataBase(data,'/data-search',function(data){
    let caracteristicas = ['Comuna','Sitio','Proveedor','Familia','Plataforma','IP','Descriptor','Contraseña','N_Nodo'];
    let ids = ["Data_Comuna","Data_Sitio","Data_Proveedor","Data_Familia","Data_Plataforma","Data_IP","Data_Descriptor","Data_Contraseña","Data_N_Nodo"];
    replaceDataInputs(caracteristicas,ids,data);
  });
});

function replaceDataInputs(caracteristicas,ids,objeto){
  index = 0;
  caracteristicas.forEach(element => {
    let valor = objeto[element];
    let input = document.getElementById(ids[index]);
    if (valor&&valor!=null&&valor!='NULL'&&valor!='-'&&valor!='NO APLICA'){
      input.value=valor;
    }else{
      input.value='Nulo';
    }
    index +=1;
  });
}

function searchToDataBase(data, route,callback) {
  var csrfToken = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url: route,
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': csrfToken
    },
    contentType: 'application/json',
    data: JSON.stringify(data),
    success: function (response) {
      console.log('Exito:', response);
      callback(response)
    },
    error: function (xhr, status, error) {
      console.error('Error', error);
    }
  });
}
