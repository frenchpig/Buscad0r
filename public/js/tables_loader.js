/*
Se espera que estos codigos sean utilizados una vez para el cargado de la base de datos previamente creada.
En caso de necesitar un cargado de nuevos datos este codigo tendra que ser modificado.
*/

var loadButton = document.getElementById('loadButton');
var loadButtonIntralot = document.getElementById('loadButtonIntralot');
var loadButtonDataLoteria = document.getElementById('loadButtonDataLoteria');
var loadButtonDatoRutas = document.getElementById('loadButtonDatoRutas');
var loadButtonData = document.getElementById('loadButtonData');

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
        sendToDatabase(data,'/dataloteria-upload');
    });
});

loadButtonData.addEventListener('click', function(){
    let fileInput = document.getElementById('fileInputData');
    let file = fileInput.files[0];
    readFile(file, function(data){
        sendToDatabase(data,'/data-upload');
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

// Lógica de UI Toggle
var toggleMassiveLoad = document.getElementById('toggleMassiveLoad');
var massiveLoadSection = document.getElementById('massiveLoadSection');
var originalLoadersSection = document.getElementById('originalLoadersSection');

toggleMassiveLoad.addEventListener('change', function() {
    if(this.checked) {
        massiveLoadSection.classList.remove('d-none');
        originalLoadersSection.classList.add('d-none');
    } else {
        massiveLoadSection.classList.add('d-none');
        originalLoadersSection.classList.remove('d-none');
    }
});

// Lógica de Carga Masiva consolidada
var loadButtonMassive = document.getElementById('loadButtonMassive');
loadButtonMassive.addEventListener('click', function() {
    let fileInput = document.getElementById('fileInputMassive');
    let file = fileInput.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function(e) {
            var contents = e.target.result;
            var workbook = XLSX.read(contents, { type: 'binary' });

            // Mapeo de Pestañas a Rutas del backend
            const mapSheets = {
                "Servicios": "/service-insert",
                "Intralot": "/intralot-upload",
                "Loteria": "/dataloteria-upload",
                "Fibra Oscura": "/datorutas-upload",
                "Equipos": "/data-upload"
            };

            workbook.SheetNames.forEach(function(sheetName) {
                if (mapSheets[sheetName]) {
                    console.log(`Procesando hoja: ${sheetName}`);
                    var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                    // Se arma el array y se manda
                    var dataArray = [XL_row_object];
                    if (sheetName === "Servicios") {
                        // El servicio esta programado distinto en su send 
                        saveToDataBase(dataArray);
                    } else {
                        sendToDatabase(dataArray, mapSheets[sheetName]);
                    }
                } else {
                    console.warn(`Pestaña ignorada (no reconocida): ${sheetName}`);
                }
            });
            alert('Proceso de Carga Masiva Iniciado. Revise la consola para detalles de red.');
        };
        reader.readAsBinaryString(file);
    } else {
        alert('Por favor, seleccione el archivo consolidado de Base de Datos Exportada.');
    }
});
