var searchButtonServicio = document.getElementById('searchButtonServicio');

searchButtonServicio.addEventListener('click', function(){
  let codigoInput  = document.getElementById('cod');
  let codigo = codigoInput.value;
  let data = {codigo: codigo}
  searchToDataBase(data,'/service-search', function(servicio){
    let caracteristicas = ['condicion', 'ip_loop', 'cliente','comuna','direccion','lan','protocolo','servicio','vrf','wan','nombre_equipo','ip_equipo','descripcion','puerta','vlan','posiciones']
    caracteristicas.forEach(element => {
      let valor = servicio[element];
      let input = document.getElementById(element);
      if (valor&&valor!=null&&valor!='NULL'&&valor!='-'){
        input.value=valor;
      }else{
        input.value='Nulo';
      }
    });
  });
})

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
