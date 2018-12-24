<?php
    session_start();
        if(!isset($_SESSION['name'])){
            echo "<script>location.href='../../index.php';</script>";
    }else{
        // if (isset($_SESSION['temp_cod_add_client'])) {
        //   $cod = $_SESSION['temp_cod_add_client'];
        //   $name = $_SESSION['temp_name_add_client'];
        //   $cc = $_SESSION['temp_cc_add_client'];
        // }else{
        //   $cod = "";
        //   $name = "";
        //   $cc = "";
        // }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Añadir facturacion</title>
        <!-- JavaScript -->
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

      <!-- CSS -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
      <!-- Default theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
      <!-- Semantic UI theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <script>
        $(document).on('ready',function(){

  $('#btn-ingresar').click(function(){
    var url = "../../includes/add_cliente.php";

    $.ajax({
       type: "POST",
       url: url,
       data: $("#formulario").serialize(),
       success: function(data)
       {
         $('#resp').html(data);
         $('#cod_factura').val("");
         $('#cc').val("");
         $('#name').val("");
       }
     });
  });
});
       </script>
    </head>
    <body>
        <?php include '../nav_bar2.php'; ?>
        <br><br>
        <form method="POST" id="formulario">
            <div align="center">
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="cod_factura">Codigo de la factura.</label>
                      <input type="text" class="form-control" name="cod_factura" placeholder="Codigo factura" id="cod_factura" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="cc">C&eacute;dula.</label>
                      <input type="text" class="form-control" placeholder="Cedula" name="cc" id="cc"  required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                  </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <input type="button" class="btn btn-primary btn-block" name="btn-ingresar" id="btn-ingresar" value="Registrar">
                </div>
            </div>
        </form>

        <div id="resp">
          <br><br>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
