    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-->
    <!--main-->
    <section class="main">
      <div class="titulo">
        <h1>Menú de Usuario</h1>
      </div>
      <div class="panel panel-default">
        <div class="panel-body full-height">
          <div class="item-principal">
            <a href="<?= base_url('usuario/aula') ?>">
              <i class="fa fa-university" aria-hidden="true"></i>
              <h2>Aulas Asignadas</h2>
            </a>
          </div>
          <div class="item-principal">
            <a href="<?= base_url('usuario/agenda') ?>">
              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
              <h2>Agenda Escolar</h2>
            </a>
          </div>
          <div class="item-principal">
            <a href="<?= base_url('usuario/comportamiento') ?>">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <h2>Comportamieno</h2>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--main-->