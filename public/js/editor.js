let editButtonServicio = document.getElementById('editButtonServicio');
let editButtonDataLoteria = document.getElementById('editButtonDataLoteria');
// searcherDataLoteria

editButtonServicio.addEventListener('click',function(){
  let inputs = document.querySelectorAll('#searcherServicio input');
  let datos = generateObject(inputs);
  sendToDataBase("/edit-servicio",datos)
});

editButtonDataLoteria.addEventListener('click',function(){
  let inputs = document.querySelectorAll('#searcherDataLoteria input');
  let datos = generateObject(inputs);
  datos=purgeKey(datos,"DataLoteria_")
  console.log(datos);
});

function purgeKey (data,key){
  let newData = {}
  for (let oldKey in data){
    let newKey = oldKey.replace(key,"");
    newData[newKey]=data[oldKey];
  }
  return newData;
}

function generateObject(inputs){
  let obj = {}
  inputs.forEach(element => {
    obj[element.id]=element.value;
  });
  return obj;
}

function sendToDataBase(route,object){
  console.log(route);
  console.log(object);
}
