<!DOCTYPE html>
       <html>
       <head>
       <link rel="stylesheet" href="complementos/css/index.css">
              <title>Inventario Bodega</title>
       </head>
          <body>
         <img src="#" alt="logo emergia">
       <!--sesion anidada-->
       <?php 
       session_start();
       ?>
       <!--formulario de inicio de sesion-->
       <div id="contenedor"></div>
       <div class="form">
       <form action="#" method="post" autocomplete="off"> 
       <input type ="text" placeholder="Nombre de usuario" name="user" required=""><br>
       <input type ="password" placeholder="Contraseña" name="pass" required=""><br>
       <input  type ="submit"   value="Iniciar Sesion">
       </form>
       </div>
       </body>
       </html>