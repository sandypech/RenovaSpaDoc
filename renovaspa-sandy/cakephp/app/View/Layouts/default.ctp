<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev','Renova Spa');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'bootstrap-theme.min'));
		echo $this->Html->css(array('estilo.css'));
		echo $this->Html->script(array('jquery.min', 'docs.min','bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top"></nav>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ><?php echo $this->element('menu');?></div>
	
	
	
    <div class="container theme-showcase" role="main">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>

				<div class="container-fluid">
					<?php echo $this->Html->link(
							$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
							'http://www.cakephp.org/',
							array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
						);
					?>
					
						<p>
						<?php echo $cakeVersion; ?>
					</p>
					
					
				</div>

		</div>
	

</body>
</html>
