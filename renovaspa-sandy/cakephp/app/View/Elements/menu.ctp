	<nav class="navbar navbar-default">
		 <div class="container">
			 <div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 <!--<a class="navbar-brand" href="#">Renova Spa</a>-->
				 <?php echo $this->Html->link('Renova Spa', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')); ?>
			 </div>
			 <div class="navbar-collapse collapse">
				 <ul class="nav navbar-nav">

           <li class="dropdown">
					 
             <ul class="dropdown-menu">
               <li><?php echo $this->Html->link('Lista de clientes', array('controller' => 'clientes', 'action' => 'index'))?></li>
               <li><?php echo $this->Html->link('Agregar Clientes', array('controller' => 'clientes', 'action' => 'add'))?></li>
             </ul>
           </li>

					 <li><?php echo $this->Html->link('Clientes', array('controller' => 'clientes', 'action' => 'index'))?></li>
					 <li><?php echo $this->Html->link('Paises', array('controller' => 'paises', 'action' => 'index'))?></li>

					 <li><?php echo $this->Html->link('Idiomas', array('controller' => 'idiomas', 'action' => 'index')) ?></li>
					 <li><?php echo $this->Html->link('Hoteles', array('controller' => 'hoteles', 'action' => 'index')) ?></li>
           <li><?php echo $this->Html->link('Agencias', array('controller' => 'agencias', 'action' => 'index')) ?></li>
           <li><?php echo $this->Html->link('Circunstancias Medicas', array('controller' => 'circustanciasMedicas', 'action' => 'index')) ?></li>
           <li><?php echo $this->Html->link('Sesiones', array('controller' => 'sesiones', 'action' => 'index')) ?></li>
           <li><?php echo $this->Html->link('Opiniones', array('controller' => 'opiniones', 'action' => 'index')) ?></li>

				 </ul>
			 </div><!--/.nav-collapse -->
		 </div>
	 </nav>
