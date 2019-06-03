jQuery(document).ready(function(){
    $(".oculto").hide();              
      $(".inf").click(function(){
            var nodo = $(this).attr("href");  
   
            if ($(nodo).is(":visible")){
                 $(nodo).hide();
                 return false;
            }else{
          $(".oculto").hide("slow");                             
          $(nodo).fadeToggle("fast");
          return false;
            }
      });
  });
  
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  function borra_carrito() {
    var result = confirm('Esta seguro de eliminar todo el carrito?');

    if (result) {
        window.location = 'carrito_elimina/all';
    } else {
        return false; // Boton Cancela
    }
};

$(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  } );
} );