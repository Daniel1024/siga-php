<!--sidebar-->
<nav class="sidebar">
  <ul>
    <li class="img-logo-nav"><img src="<?= base_url('assets/img/surcos/logo_2.jpg') ?>" alt=""></li>
    <li><a href="<?= base_url('usuario/aula') ?>"><i class="fa fa-arrow-circle-left"></i>Volver</a></li>
    <li class="parent"><a href="<?= base_url('aulas/menu') . '/' . $id ?>"><i class="fa fa-university"></i><?= $titulo ?></a>
    	<ul>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/matematica"><i class="fa fa-chevron-circle-right"></i>Matemática</a></li>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/ingles"><i class="fa fa-chevron-circle-right"></i>Ingles</a></li>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/historia"><i class="fa fa-chevron-circle-right"></i>Historia</a></li>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/castellano"><i class="fa fa-chevron-circle-right"></i>Castellano</a></li>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/fisica"><i class="fa fa-chevron-circle-right"></i>Fisica</a></li>
        <li><a href="<?= base_url('aulas/menu') . '/' . $id ?>/quimica"><i class="fa fa-chevron-circle-right"></i>Quimica</a></li>
      </ul>
    </li>
    <li><a href="<?= base_url('home/salir') ?>"><i class="fa fa-sign-out"></i>Cerrar Sessión</a></li>
  </ul>
</nav>
<!--sidebar-->