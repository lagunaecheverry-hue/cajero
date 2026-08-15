<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cajero Automático</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary" >

   <h2 class="text-center" style="color: black"> Bienvenido a PHP Bank</h2> 
 <div class="container  ">   
   <div class="row justify-content-center">
      <div class="col-md-6">
       <div class="card p-4 bg-warning">

          <form action="" method="POST">
           <div class="mb-3 col-md-3">
           <label for="">PIN</label>
           <input type="password" name="pin"  class="form-control" required>
            </div>

           <div class="mb-3 col-md-3">
           <label for="">Monto a retirar</label>
            <input type="number" name="monto" min="1" class="form-control" required>
           </div>

            <div class="d-grid gap-2 d-md-block">
              <button type="submit" value="" class="btn btn-primary btn-lg "  >Realizar retiro </Button>
              <button type ="submit" onclick="window.location.href='index.php'" class="btn btn-danger btn-lg" >Finalizar</button>
             </div>
         </form><br>
     

   <?php
    //utilizamos las variables de entorno $_SERVER
      if($_SERVER["REQUEST_METHOD"]=="POST"){  //el metodo de envio es post?
      //capturamos las variables del formulario
    $pinIngresado = $_POST['pin'];
    $montoRetirar = $_POST['monto'];

     // echo "$pinIngresado ----  $montoRetirar"
     //simulamos que los datos estan en una base de datos
      $cliente = "Aprendiz"; //string
      $saldoInicial = 50000;  //integer
      $pinCorrecto = 1234;
      $saldoRetirar =  $montoRetirar;

    //logica de la validación
     if($pinIngresado== $pinCorrecto){
        echo "✅ Tu saldo actual es $saldoInicial <br/>";
        if($montoRetirar <= $saldoInicial){
        $nuevoSaldo = $saldoInicial - $montoRetirar;
         echo "💸 El monto que retiraste es de: $saldoRetirar <br/>";
        echo "💰 Tu nuevo saldo es: $nuevoSaldo";
        }
        else{
            echo "⚠️saldo insuficiente";
        }
     }
       else{
        echo "🔐Pin Incorrecto!!";
       }
      }
   ?>
</div>
 </div>
     </div>
   </div>

</body>
</html>
</html>