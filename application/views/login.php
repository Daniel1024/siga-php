<!doctype html>
<html lang="es">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <title>Login</title>
   <!--Cargar fuentes de google-->
   <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
   <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
   <!--Cargar iconos awesome-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <!--Cargar el ccs propio-->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/inicio.css">
</head>

<body>
    <div id="login">
        <form action="<?= base_url('home/login') ?>" target="_top" method="post">
            <fieldset class="clearfix">
                <p><span class="fa fa-user" aria-hidden="true"></span>
                  <input type="text" id="user" name="user" placeholder="Usuario" required>
               </p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-lock" aria-hidden="true"></span>
                  <input type="password" id="pass" name="pass" placeholder="Clave" required>
               </p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Ingresar"></p>
            </fieldset>
        </form>
        <span id="msj"></span>
        <p>Ha olvidado su contraseña? <a target="_parent" href="inicio.html">Recuperar</a><span class="fa fa-arrow-right" aria-hidden="true"></span></p>
    </div> <!-- end login -->
    <!--Cargando el jQuery-->
   <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
   <!--<script>
      $(document).ready(function (){
         $( "form" ).submit(function( event ) {
            event.preventDefault();
            if ( ($( "#user" ).val() === "admin") && ($('#pass').val() === "admin") ) {
               $( "#msj" ).text( "Espere..." ).show();
               parent.location.href = "<?= base_url() ?>home/menu";
            } else {
               $( "#msj" ).text( "No es valido" ).show().fadeOut( 10000 );
            }

         });
      });
   </script>-->
</body>
</html>