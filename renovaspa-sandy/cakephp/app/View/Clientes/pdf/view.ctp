<div class="Clientes view">
  <img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-left" alt="Logo RenovaSpa" width="17%"/>
	<h1>Exoneración de Responsabilidad</h1>
	<h2>Bienvenido | Welcome | Willkommen | Benvenuto | Valkomen | Bienvenue</h2>
	<br>
  <p>Por favor, dedique unos minutos a leer cuidadosamente la información siguiente y suscribirla con su firma al finalizar la lectura, muchas gracias.</p>
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo h($cliente['Paise']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo h($cliente['Idioma']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo h($cliente['Hotele']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo h($cliente['Agencia']['nombre_comercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Circunstancias_medicas'); ?></dt>
		<dd>
			<?php echo h($cliente['CircustanciasMedica']['nombre']); ?>
			&nbsp;
		</dd>
    <dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fecha_alta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['correo_electronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['habitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firma'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['firma']); ?>
			&nbsp;
		</dd>
	</dl>
	
</div>
