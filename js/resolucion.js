function busqueda(){
  $(document).on("ready", function(){
    enviarDatos();
  });

  function enviarDatos(){
    $("#frm").on("submit", function(e){
      e.preventDefault();
      var frm = $(this).serialize();
      $.ajax({
        "method":"POST",
        "url": "producto.php",
        "data": frm
      }).done(function(info){
        $("#mensaje").addClass("mostrar");
        $("#mensaje").html(info);
      })
    })
  }
}