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
let addRoute = [
  'add-servicio',
  'add-intralot',
  'add-dataloteria',
  'add-datoruta',
  'add-data'
]
let trashKey = [
  'Servicio_',
  'Intralot_',
  'DataLoteria_',
  'DatoRutas_',
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
    addToDataBase(obj,addRoute[index]);
  });
});

function addToDataBase(data,route){
  let csrfToken = $('meta[name="csrf-token"]').attr('content');
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

// let button = document.getElementById(addButtons[0]);
// button.addEventListener('click',function(){

//   inputs.forEach(element => {
//     console.log(element.value);
//   });
// });


