    <!--sidebar-->
    <nav class="sidebar">
      <ul>
        <li class="img-logo-nav"><img src="<?= base_url('assets/img/surcos/logo_2.jpg') ?>" alt=""></li>
        <li><a href="<?= base_url('home/menu') ?>"><i class="fa fa-envelope"></i>MENÚ PRINCIPAL</a></li>
        <li class="parent"><a href="<?= base_url('notificacion/menu') ?>"><i class="fa fa-bell"></i>Menú de Notificaciones</a>
          <ul>
            <li><a href="<?= base_url('notificacion/comunicado') ?>"><i class="fa fa-chevron-circle-right"></i>Comunicados</a></li>
            <li><a href="<?= base_url('notificacion/cartelera') ?>"><i class="fa fa-chevron-circle-right"></i>Cartelera</a></li>
            <li><a href="<?= base_url('notificacion/calendario') ?>"><i class="fa fa-chevron-circle-right"></i>Calendario</a></li>
          </ul>
        </li>
        <li class="parent"><a href="<?= base_url('usuario/menu') ?>"><i class="fa fa-user"></i>Menú de Usuario</a>
          <ul>
            <li><a href="<?= base_url('usuario/aula') ?>"><i class="fa fa-chevron-circle-right"></i>Aulas Asignadas</a></li>
            <li><a href="<?= base_url('usuario/agenda') ?>"><i class="fa fa-chevron-circle-right"></i>Agenda Escolar</a></li>
            <li><a href="<?= base_url('usuario/comportamiento') ?>"><i class="fa fa-chevron-circle-right"></i>Comportamiento</a></li>
          </ul>
        </li>
        <li class="parent"><a href="<?= base_url('docente/menu') ?>"><i class="fa fa-briefcase"></i>Portafolio Docente</a>
          <ul>
            <li><a href="<?= base_url('docente/registro') ?>"><i class="fa fa-chevron-circle-right"></i>Registro</a></li>
            <li><a href="<?= base_url('docente/reporte') ?>"><i class="fa fa-chevron-circle-right"></i>Reporte</a></li>
            <li><a href="<?= base_url('docente/estandares') ?>"><i class="fa fa-chevron-circle-right"></i>Estandares</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('home/salir') ?>"><i class="fa fa-sign-out"></i>Cerrar Sessión</a></li>
      </ul>
    </nav>
    <!--sidebar-->