let adderID = [
  'searcherServicio',
  'searcherIntralot',
  'searcherDataLoteria',
  'searcherDatoRutas',
  'searcherData'
];
let addButtons = [
  'addButtonServicio',
  'addButtonIntralot',
  'addButtonDataLoteria',
  'addButtonDatoRuta',
  'addButtonData'
];
let trashKey = [
  'Servicio_',
  'Intralot_',
  'DataLoteria_',
  'DatoRuta_',
  'Data_'
];

adderID.forEach((element,index) => {
  let btn = document.getElementById(addButtons[index]);
  btn.addEventListener('click',function(){
    let inputs = document.querySelectorAll(`#${element} input`);
    let obj = generateObject(inputs);
    if(index>1){
      obj = purgeKey(obj,trashKey[index]);
    }
    //agregar enviado a base de datos
  });
});

// let button = document.getElementById(addButtons[0]);
// button.addEventListener('click',function(){

//   inputs.forEach(element => {
//     console.log(element.value);
//   });
// });


