        <nav id="aside-nav">
          <ul>
<?php if ($sf_user->isAuthenticated()): ?>
            <li><h2>Navegación</h2>
              <ul>
<!--                <li class="first"><?php echo link_to('Pacientes en Internamiento','admision/index')  ?></li>
                <li><?php echo link_to('Admision de Pacientes','admision/new')  ?></li>
                <li><?php echo link_to('Pacientes','pacientes/index')  ?></li>
                <li><?php echo link_to('Busqueda de Pacientes','pacientes/search')  ?></li>
                <li><?php echo link_to('Coordinación de Enfermeria','coordenfermeria/default')  ?></li>
                <li><?php echo link_to('Camas','cama/index')  ?></li>
	         <li><?php echo link_to('Departamentos','departamento/index')  ?></li>-->

                <li><?php echo link_to('Lista de Quirofanos','agenda/index')  ?></li>
		<li><?php echo link_to('Agregar Quirofanos','salas/registroq')  ?></li>
		<li><?php echo link_to('Registrar salas','salas/registrosalas')  ?></li>
		<li><?php echo link_to('Busqueda personalisada','agenda/pbusqueda') ?></li>		
<!--    <li><?php echo link_to('Busqueda de cirugías canceladas',"agenda/fcancelada")?><li>-->
		

                <!-- <li><?php //echo link_to('Tipo Historia','tipohc/index')  ?></li> -->
              </ul>
            </li>
<?php endif ?>
            <li>
              <h2>Referencia</h2>
              <ul>
                <li class="first"><?php echo link_to('Clasificación CIE9MC','referencia/cie9mc')  ?></li>
                <li><?php echo link_to('Clasificación CIE10','referencia/cie10') ?></li>
              </ul>
            </li>
<!--
        <?php if ($sf_user->isAuthenticated()): ?>
            <li>
              <h2>Usuario</h2>
              <ul>
                <li id="perfil" class="first"><?php echo link_to('Mi Perfil','profile/editar')  ?></li>
                <!-- <li id="perfil" class="first"><?php echo link_to('Opciones','profile/editar')  ?></li> - ->
                <li id="perfil" class="first"><?php echo link_to('Contraseña','profile/editpass')  ?></li>
                <li><?php echo link_to('Comentarios','comentario/index')  ?></li>
                <li><?php echo link_to('Salir', 'sfGuardAuth/signout') ?></li>
                <!--
                <li><a href="#">Free CSS Templates</a></li>
                <li><a href="#">Free CSS Templates</a></li>
                - ->
              </ul>
            </li>
        <?php endif ?> -->
          </ul>
        </nav>
