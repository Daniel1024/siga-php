<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <title>SIGA</title>
   <link rel="icon" type="image/png" href="<?= base_url() ?>favicon.png" />
   <!--Cargar fuentes de google-->
   <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   <!--Cargar iconos awesome-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <!--Cargar ccs para el carousel del banner-->
   <link rel="stylesheet" href="<?= base_url() ?>assets/owl.carousel/owl.carousel.min.css">
   <!--Cargar el ccs de fancyBox-->
   <link rel="stylesheet" href="<?= base_url() ?>assets/fancyBox/jquery.fancybox.css">
   <!--Cargar el ccs propio-->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>
   <!--menu SIGA-->
   <header class="menu-header">
      <nav class="menu-bar">
         <div class="container">
            <div id="toggle-menu">
               <img class="logo-menu" src="<?= base_url() ?>assets/img/logo-4.png" alt="">
               <i class="fa fa-bars fa-lg"></i>
            </div>
            <ul class="menu">
               <li><img class="logo-menu" src="<?= base_url() ?>assets/img/logo-4.png" alt=""></li>
               <li><a class="scroll" href="#section-1">Home</a></li>
               <li><a class="scroll" href="#section-2">¿Cómo obtener el SIGA?</a></li>
               <li><a class="scroll" href="#section-3">¿Por qué adquirir el SIGA?</a></li>
               <li><a class="scroll" href="#section-4">Clientes</a></li>
               <li><a class="scroll" href="#section-5">Testimonios</a></li>
               <li>
                  <?php if ($this->session->userdata('login')) { ?>
                  <a href="<?= base_url() ?>home/menu">Entrar</a>
                  <?php } else { ?>
                  <a class="fancyinicio" href="<?= base_url() ?>home/login" data-fancybox-type="iframe">Entrar</a>
                  <?php } ?>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <!--menu SIGA-->
   <!--seccion Banner-->
   <section class="seccion-banner" id="section-1">
      <div class="owl-carousel owl-theme owl-large">
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-1.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-1.1.jpg" alt="banner1">
            </a>
         </div>
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-2.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-2.1.jpg" alt="banner2">
            </a>
         </div>
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-3.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-3.1.jpg" alt="banner3">
            </a>
         </div>
      </div>
      <div class="owl-carousel owl-theme owl-small">
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-1.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-1.jpg" alt="banner1">
            </a>
         </div>
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-2.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-2.jpg" alt="banner2">
            </a>
         </div>
         <div class="item">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-3.png" class="fancybox">
               <img src="<?= base_url() ?>assets/img/banners/banner-3.jpg" alt="banner3">
            </a>
         </div>
      </div>
   </section>
   <!--seccion Banner-->
   <!--seccion INFO-->
   <section class="seccion-azul">
      <!--<div class="container">-->
         <div class="seccion-info">
            <a href="<?= base_url() ?>assets/img/banners/banner-text-1.png" rel="group" class="fancybox">
               <span class="item-icon">
                  <i class="fa fa-search-plus"></i>
               </span>
               <img src="<?= base_url() ?>assets/img/info-1.png" alt="info-1.png">
            </a>
            <a href="<?= base_url() ?>assets/img/banners/banner-text-2.png" rel="group" class="fancybox">
               <span class="item-icon">
                  <i class="fa fa-search-plus"></i>
               </span>
               <img src="<?= base_url() ?>assets/img/info-2.png" alt="info-2.png">
            </a>
            <a href="<?= base_url() ?>assets/img/banners/banner-text-3.png" rel="group" class="fancybox">
               <span class="item-icon">
                  <i class="fa fa-search-plus"></i>
               </span>
               <img src="<?= base_url() ?>assets/img/info-3.png" alt="info-3.png">
            </a>
            <a href="<?= base_url() ?>assets/img/banners/banner-text-4.png" rel="group" class="fancybox">
               <span class="item-icon">
                  <i class="fa fa-search-plus"></i>
               </span>
               <img src="<?= base_url() ?>assets/img/info-4.png" alt="info-4.png">
            </a>
         </div>
      <!--</div>-->
   </section>
   <!--seccion INFO-->
   <!--seccion Contacto-->
   <section class="seccion-verde" id="section-2">
      <div class="container">
         <div class="contacto">
            <div class="items-flex">
               <div>
                  <h3>DISTRIBUIDOR AUTORIZADO</h3>
                  <img src="<?= base_url() ?>assets/img/logo-eata.jpg" alt="">
               </div>
               <div>
                  <p>Dirección:</p>
                  <p>José Gole N53-13 y Capitán Ramón Borja</p>
               </div>
               <div>
                  <p>Teléfonos:</p>
                  <p>(593) 2 2404017 / 2405386 / 2408932</p>
                  <p>(593) 9 91894971 / 9 987561556</p>
               </div>
            </div>
            <div class="items-flex texto">
               <!--<iframe src="https://www.google.com/maps/d/u/0/embed?mid=zdeqN0kApaoQ.kAJfLgL7E7BM" width="100%" height="100%"></iframe>-->
               <h3>¿QUIENES SOMOS?</h3>
               <p>EATA DESARROLLO DEL TALENTO CIA. LTDA.  ES UNA FIRMA AUDITORA, ASESORA, Y CAPACITADORA EN EL AMBITO DE EDUCACIÓN. NUESTRO ENFOQUE ES EL ACOMPAÑAMIENTO Y LA FORMACIÓN HACIA LA CALIDAD EDUCATIVA, BASADA EN ESTÁNDARES NACIONALES EN ARTICULACIÓN CON PRÁCTICAS Y ESTÁNDARES INTERNACIONALES PROBADOS EN MUCHOS COLEGIOS DE NUESTRO PAÍS.</p>
               <h3>NUESTRA EXPERIENCIA:</h3>
               <p>CONTAMOS CON MAS DE 14 AÑOS DE EXPERIENCIA, CON MÁS DE 120MIL PERSONAS CAPACITADAS.<br>AL MOMENTO TENEMOS MÁS DE 60 COLEGIOS AUDITADOS, ASESORADOS Y FORMÁNDOSE, HACIA LA CALIDAD EDUCATIVA.</p>
               <div class="texto-flex">
                  <h3>Principales Clientes</h3>
                  <div class="texto-flex-item">
                     <ul>
                        <li>Colegio Charles Darwin</li>
                        <li>Colegio de Liga</li>
                        <li>Colegio Hontanar</li>
                        <li>Colegio Surcos</li>
                        <li>Colegios la Fundación San Luis (Pronaca)</li>
                        <li>Colegio Lev Vygotsky (Riobamba)</li>
                     </ul>
                  </div>
                  <div class="texto-flex-item">
                     <ul>
                        <li>Colegio La Victoria (Ibarra)</li>
                        <li>Colegio Montesori (Guayaquil)</li>
                        <li>Ueprim (Machala)</li>
                        <li>María Clarac</li>
                        <li>María Auxiliadora</li>
                        <li>Redemtio</li>
                     </ul>
                  </div>
                  <div class="texto-flex-item">
                     <ul>
                        <li>Tomás Moro</li>
                        <li>Terranova</li>
                        <li>Los Pinos</li>
                        <li>Intisana</li>
                        <li>Antares</li>
                        <li>APCH</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--seccion Contacto-->
   <section class="seccion-morada" id="section-3">
      <div class="container">
         <div class="calidad-educativa">
            <h2>¿Por qué adquirir el SIGA?</h2>
            <div class="calidad-educativa-items texto">
               <p>1. Infraestructura Tecnológica: </p>
               <ol>
                  <li>Gran parte de docentes en la actualidad poseen acceso a Internet en sus Instituciones educativas a nivel nacional.</li>
                  <li>La mayoría de docentes, en el país, tienen acceso a un equipo de computación: de Escritorio, Laptop, Tablet.</li>
                  <li>Muy pocos docentes utilizan un sistema para realizar su gestión.</li>
               </ol>
            </div>
            <div class="calidad-educativa-items texto">
               <p>2. Trazabilidad y Unificación de Procesos:</p>
               <ol>
                  <li>Todos los Docentes requieren de una plataforma que permita unificar los procesos de planificación y generar formatos uniformes, además que les facilite la elaboración de las planificaciones (anuales, de bloque, por Destrezas)</li>
                  <li>Todos los docentes piensan que es muy importante tener acceso, de una forma ordenada y sistematizada a sus planificaciones.</li>
                  <li>Los softwares de gestión académica no solucionan actualmente estos procesos.</li>
               </ol>
            </div>
            <div class="calidad-educativa-items texto">
               <p>3. Evaluación, Refuerzo Académico y Estadística:</p>
               <ol>
                  <li>Todos los docentes deben evaluar continuamente a sus estudiantes, y según el instructivo de Evaluación vigente, deben permitir a los estudiantes que no alcancen el aprendizaje generar Refuerzo Académico.</li>
                  <li>La información estadística del registro de calificaciones es una herramienta importante para la toma de decisiones.</li>
                  <li>Los softwares de gestión académica existentes no solucionan los procesos exigidos.</li>
               </ol>
            </div>
            <div class="calidad-educativa-items texto">
               <p>4. Aulas Virtuales y Recepción de Trabajos:</p>
               <ol>
                  <li>Todos los docentes deben tener la posibilidad de generar contenidos multimedia de una forma fácil, y hacer clases en un ambiente acorde a la realidad tecnológica de sus estudiantes.</li>
                  <li>Todos los estudiantes deben tener opción de enviar sus trabajos de manera digital, y los docentes tener acceso a esa información para facilitar los procesos de evaluación.</li>
                  <li>Los softwares actuales de gestión no permiten realizar estos procesos.</li>
               </ol>
            </div>
         </div>
         <div class="contenedor">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NM7kHrf4Y7M" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </section>
   <!--seccion Contacto-->
   <!--seccion Clientes-->
   <section class="seccion-verde" id="section-4">
      <div class="container">
         <div class="seccion-clientes">
            <h2>CLIENTES</h2>
            <div class="owl-carousel owl-clientes">
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-1" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Felicitaciones el sistema es de lo mejor.</p>
                     <p>Profesor - Colegio Alessandro Volta</p>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-2" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Seguir manteniendo el sistema es una gran ayuda para saber de inmediato el desarrollo de los estudiantes.</p>
                     <p>Profesor - Unidad Educativa Atenas</p>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-3" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Felicitaciones el sistema es de lo mejor.</p>
                     <p>Profesor - Colegio Alessandro Volta</p>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-4" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Seguir manteniendo el sistema es una gran ayuda para saber de inmediato el desarrollo de los estudiantes.</p>
                     <p>Profesor - Unidad Educativa Atenas</p>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-5" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Felicitaciones el sistema es de lo mejor.</p>
                     <p>Profesor - Colegio Alessandro Volta</p>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/200x200/ffffff/000000?text=img-6" alt="">
                  <div>
                     <p><strong>Testimonio:</strong> Seguir manteniendo el sistema es una gran ayuda para saber de inmediato el desarrollo de los estudiantes.</p>
                     <p>Profesor - Unidad Educativa Atenas</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--seccion Clientes-->
   <!--seccion Testimonios-->
   <section class="seccion-azul" id="section-5">
      <div class="container">
         <div class="seccion-testimonios">
            <h2>TESTIMONIOS</h2>
            <h3>Personal de colegios</h3>
            <div class="owl-carousel owl-clientes">
               <div class="item">
                  <div class="content-video">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/9QP3dI6ARb8" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div>
                     <p>Conéctate desde cualquier lugar</p>
                     <p>Profesor - Colegio Alessandro Volta</p>
                  </div>
               </div>
               <div class="item">
                  <div class="content-video">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/QRU4wct1DEw" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div>
                     <p>Eficiente con tu tiempo y gestión</p>
                     <p>Profesor - Unidad Educativa Atenas</p>
                  </div>
               </div>
               <div class="item">
                  <div class="content-video">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/9QP3dI6ARb8" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div>
                     <p>Conéctate desde cualquier lugar</p>
                     <p>Profesor - Colegio Alessandro Volta</p>
                  </div>
               </div>
               <div class="item">
                  <div class="content-video">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/QRU4wct1DEw" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div>
                     <p>Eficiente con tu tiempo y gestión</p>
                     <p>Profesor - Unidad Educativa Atenas</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--seccion Testimonios-->
   <!-- Footer -->
   <footer class="container">
      <img src="<?= base_url() ?>assets/img/logo-4.png" alt="logo">
      <div class="footer">
         <div class="footer-item">
            <p>El SIGA es un Sistema Integral de Gestión del Aprendizaje que apoya a la consecución de la Calidad Educativa, facilitando el proceso a estudiantes, directivos, docentes, y padres de familia.</p>
         </div>
         <div class="footer-item">
            <ul>
               <li><a href="#">Instituciones Educativas</a></li>
               <li><a href="#">Administradores</a></li>
               <li><a href="#">Docentes</a></li>
               <li><a href="#">Estudiantes</a></li>
               <li><a href="#">Padres de Familia</a></li>
            </ul>
         </div>
         <div class="footer-item">
            <ul>
               <li><a href="#">Directivos</a></li>
               <li><a href="#">Comunidad</a></li>
               <li><a href="#">Soporte</a></li>
               <li><a href="#">Privacidad</a></li>
               <li><a href="#">Términos de Servicio</a></li>
            </ul>
         </div>
         <div class="footer-item social">
            <ul>
               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
         </div>
      </div>
      <p><strong>SIGA <i class="fa fa-copyright" aria-hidden="true"></i> 2016</strong></p>
   </footer>
   <!-- Footer -->
   <!--Cargando el jQuery-->
   <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
   <!--Cargando el carousel del banner-->
   <script src="<?= base_url() ?>assets/owl.carousel/owl.carousel.min.js"></script>
   <!--Cargando el fancyBox-->
   <script src="<?= base_url() ?>assets/fancyBox/jquery.fancybox.pack.js"></script>
   <!--Cargando el js propio-->
   <script src="<?= base_url() ?>assets/js/app.js"></script>
</body>
</html>