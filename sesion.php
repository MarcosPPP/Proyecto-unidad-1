<?php 
session_start();

if($_POST){
if(($_POST['usuario']=="administrador")  && ($_POST['contraseña'] == "asd")){

     $_SESSION['usuario']="123";
      $_SESSION['nombreUsuario']="administrador";
    header('Location:administrador.php');

     }if(($_POST['usuario']=="cliente")  && ($_POST['contraseña'] == "123")){
       
        $_SESSION['usuario']="123";
        $_SESSION['nombreUsuario']="cliente";
      header('Location:index.php'); 
    
    }else{
        $mensaje="Error: El  usuario o contraseña son incorrectos";
    }
   
}
?>
<!doctype html>
<html lang="en">
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
              <div class="card">
                  <div class="card-body">

                  <?php if(isset($mensaje)){?>
                       <div class="alert alert-danger" role="alert">
                           <?php echo $mensaje; ?>
                        
                       </div>
                       <?php }?>
<form method="POST">
<div class = "form-group">
<label >usuario</label>
<input type="text" class="form-control" name="usuario" placeholder="usuario">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Contraseña:</label>
<input type="contraseña" name="contraseña" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary">Entrar</button>
</form>


 </div>
     </div>
                 
          </div>
                  </div>
                        </div>
              
                                </div>
                                        </div>
                                                 </body>
</html>