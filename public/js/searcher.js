var searchButtonServicio = document.getElementById('searchButtonServicio');

searchButtonServicio.addEventListener('click', function(){
  let codigo  = document.getElementById('cod').value();
  let data = {codigo: codigo}
  searchToDataBase()
})

function searchToDataBase(data,route){
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
