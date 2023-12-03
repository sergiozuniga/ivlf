$(function() {
  $('#region_id').on('change', regionOnchange);
});

function regionOnchange(){
  var region_id = $(this).val();
  //alert('region_id: '+region_id);
  $.get('/comunas', {region_id: region_id}, function(comunas){
    $('#comuna_id').empty();
    $('#comuna_id').append('<option value="">Seleccione comuna</option>');
    $.each(comunas, function(i, comuna){
      $('#comuna_id').append('<option value="' + comuna.id + '">' + comuna.nombre + '</option>');
    });
  });
}