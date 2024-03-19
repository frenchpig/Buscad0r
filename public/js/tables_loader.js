/*
Se espera que estos codigos sean utilizados una vez para el cargado de la base de datos previamente creada.
En caso de necesitar un cargado de nuevos datos este codigo tendra que ser modificado.
*/

var loadButton = document.getElementById('loadButton');

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
    //Convierte array en JSON
    // let jsonData = JSON.stringify(dataArray);
    // $.ajax({
    //     url: '/service-insert',
    //     type: 'POST',
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     data: jsonData, // Tu JSON data aquí
    //     success: function(response) {
    //         console.log('Solicitud exitosa:', response);
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error en la solicitud:', error);
    //     }
    // });
}



