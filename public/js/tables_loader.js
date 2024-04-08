/*
Se espera que estos codigos sean utilizados una vez para el cargado de la base de datos previamente creada.
En caso de necesitar un cargado de nuevos datos este codigo tendra que ser modificado.
*/

var loadButton = document.getElementById('loadButton');
var loadButtonIntralot = document.getElementById('loadButtonIntralot');
var loadButtonDataLoteria = document.getElementById('loadButtonDataLoteria');
var loadButtonDatoRutas = document.getElementById('loadButtonDatoRutas');

loadButton.addEventListener('click', function () {
    //Trae el input de fileInput, donde deberia estar el excel
    let fileInput = document.getElementById('fileInput');
    //separa los datos del input quedando solo con el archivo excel
    let file = fileInput.files[0];
    if (file) {
        let reader = new FileReader();
        //Todo este codigo se encarga de leer el excel y transformarlo en un array legible
        reader.onload = function (e) {
            var contents = e.target.result;
            var workbook = XLSX.read(contents, { type: 'binary' });
            var dataArray = [];

            workbook.SheetNames.forEach(function (sheetName) {
                var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                dataArray.push(XL_row_object);
            });

            saveToDataBase(dataArray);

            // Aquí puedes hacer lo que quieras con el array de datos, como procesarlo, mostrarlo en una tabla, etc.
        };
        reader.readAsBinaryString(file);
    }else{
        console.error('No se seleccionó ningún archivo.');
    }
});

loadButtonDatoRutas.addEventListener('click', function(){
    let fileInput = document.getElementById('fileInputDatoRutas');
    let file = fileInput.files[0];
    readFile(file, function(data){
        console.log(data);
        sendToDatabase(data,'/datorutas-upload');
    });
});

loadButtonIntralot.addEventListener('click', function(){
    //Trae el input de fileInput, donde deberia estar el excel
    let fileInput = document.getElementById('fileInputIntralot');
    //separa los datos del input quedando solo con el archivo excel
    let file = fileInput.files[0];
    readFile(file, function(data){
        sendToDatabase(data,'/intralot-upload');
    })
});

loadButtonDataLoteria.addEventListener('click', function(){
    let fileInput = document.getElementById('fileInputDataLoteria');
    let file = fileInput.files[0];
    readFile(file, function(data){
        console.log(data);
        sendToDatabase(data,'/dataloteria-upload');
    });
});

function readFile(file, callback){
    let reader = new FileReader();
    reader.onload = function (e) {
        var contents = e.target.result;
        var workbook = XLSX.read(contents, { type: 'binary' });
        var dataArray = [];

        workbook.SheetNames.forEach(function (sheetName) {
            var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            dataArray.push(XL_row_object);
        });
        // Aquí puedes hacer lo que quieras con el array de datos, como procesarlo, mostrarlo en una tabla, etc.
        callback(dataArray);
    };
    reader.readAsBinaryString(file);
}

function sendToDatabase(data,route){
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    data.forEach(element => {
        $.ajax({
            url: route,
            type: 'POST',
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            contentType: 'application/json',
            data: JSON.stringify(element),
            success: function(response){
                console.log('Exito:',response);
            },
            error: function(xhr, status, error){
                console.error('Error',error);
            }
        });
    });
}

function saveToDataBase(dataArray){
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    dataArray.forEach(element => {
        $.ajax({
            url: '/service-insert',
            type: 'POST',
            headers:{
                'X-CSRF-TOKEN': csrfToken // Incluir el token CSRF como encabezado de la solicitud
            },
            contentType: 'application/json',
            data: JSON.stringify(element),
            success: function(response) {
                console.log('Éxito:', response);
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
}



