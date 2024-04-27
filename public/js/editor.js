//Carga de botones
let editButtonServicio = document.getElementById('editButtonServicio');
let editButtonIntralot = document.getElementById('editButtonIntralot');
let editButtonDataLoteria = document.getElementById('editButtonDataLoteria');


/*
  Asigancion de datos
  Se repiten funciones similares para todos los botones
*/
editButtonServicio.addEventListener('click',function(){
  let inputs = document.querySelectorAll('#searcherServicio input');
  let datos = generateObject(inputs);
  console.log(datos);
  sendToDataBase("/edit-servicio",datos);
});

editButtonIntralot.addEventListener('click', function(){
  let inputs = document.querySelectorAll('#searcherIntralot input');
  let datos = generateObject(inputs);
  sendToDataBase('/edit-intralot',datos);
});

editButtonDataLoteria.addEventListener('click',function(){
  let inputs = document.querySelectorAll('#searcherDataLoteria input');
  let datos = generateObject(inputs);
  datos=purgeKey(datos,"DataLoteria_")
  console.log(datos);
});

/*
  Algunas ID estan sucias (Contienen datos extras) por lo que esta funcion reemplaza
  la basura extra para poder asignar los datos como corresponde.
*/
function purgeKey (data,key){
  let newData = {}
  for (let oldKey in data){
    let newKey = oldKey.replace(key,"");
    newData[newKey]=data[oldKey];
  }
  return newData;
}

/*
  Debido a que esta funcion se repite tantas veces
  se prefierio convertirla en una funcion unica para asi no
  realizar tanto codigo similar.
*/
function generateObject(inputs){
  let obj = {}
  inputs.forEach(element => {
    obj[element.id]=element.value;
  });
  return obj;
}

function sendToDataBase(route, object) {
  let csrfToken = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url: route,
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': csrfToken
    },
    contentType: 'application/json',
    data: JSON.stringify(object),
    success: function (response) {
      alert(response.message)
    },
    error: function (xhr, status, error) {
      console.error('Error', error);
    }
  });
}
