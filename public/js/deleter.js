let buttons = [
  'deleteButtonServicio',
  'deleteButtonIntralot',
  'deleteButtonDataLoteria',
  'deleteButtonDatoRuta',
  'deleteButtonData'
];
let inputs = [
  'cod',
  'COD_DE_SERVICIO',
  'DataLoteria_Codigo_de_servicio',
  'DatoRutas_NUMERO_DE_SERVICIO',
  'Data_Equipo'
];
let deleteRoutes=[
  'delete-service',
  'delete-intralot',
  'delete-dataloteria',
  'delete-datoruta',
  'delete-data',
];

buttons.forEach((element,index) => {
  let input = inputs[index]
  let btn = document.getElementById(element)
  btn.addEventListener('click',function(){
    let toDelete = element.replace('deleteButton','');
    let confirmation = confirm(`Estas apunto de eliminar un/a ${toDelete}`)
    if (!confirmation){
      alert('Accion cancelada');
      return
    }
    let code = document.getElementById(input).value;
    let route = deleteRoutes[index]
    deleteToDataBase(route,code);
  });
});

function deleteToDataBase(route,key){
  let csrfToken = $('meta[name="csrf-token"]').attr('content');
  let data = {code: key};
  $.ajax({
    url: route,
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': csrfToken
    },
    contentType: 'application/json',
    data: JSON.stringify(data),
    success: function (response) {
      alert(response.message)
    },
    error: function (xhr, status, error) {
      console.error('Error', error);
    }
  });
}
