<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />

<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilos');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div class="content">
    <table>
        <tr>
            <td>
   
                <img width="975" height="90" <?php echo $this->html->image('baner.png');?> 
    </td>
        </tr>
    </table>
    <div align="right">
        <p><?php echo $this->html->link('Cerrar Sesion', array ('controller'=>'Users','action'=>'logout'));?></p>
    </div>
  <div class="header">
     
  <div class="bar">
    <ul>
      <li><a href="/eltrueque.com/inicio">Inicio</a></li>
      <li><a href="http://www.free-css.com/" accesskey="a">Acerca de</a></li>
    </ul>
  </div>
  <div class="search_field">
    <form method="post" action="/eltrueque.com/products/search">
      <div class="search_form">
        <p>Busqueda
          <input type="text" name="search" class="search" />
          <input type="submit" value="Buscar" class="submit" />
          <a class="grey" href="/eltrueque.com/products/searchview">Avanzada</a></p>
      </div>
    </form>
    <p>.</p>
  </div>
  <div class="left">
    <p align ="center">
        <h2><?php echo $title_for_layout?></h2>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    
    <?php //echo $content_for_layout ?>
    </p>
  </div>
    
 <div class="right">     
   <center> <h3>Mi Menu</h3></center>
    <div class="right_articles">
        <br><br>
 <center> <?php echo $this->html->link('Gestion Productos', array ('controller'=>'Products','action'=>'index'));?></center><br><br><br>
 <center> <?php echo $this->html->link('Gestion Usuarios', array ('controller'=>'Users','action'=>'index'));?></center><br><br><br>
 <center> <?php echo $this->html->link('Ver Estadisticas', array ('controller'=>'Estadisticas','action'=>'index'));?></center><br><br><br>
 <center> <?php echo $this->html->link('Mi Cuenta', array ('controller'=>'Products','action'=>''));?></center><br><br><br><br><br><br><br><br>		                                      
    </div>
  </div>   
 
  <div class="footer">
    <p><a href="http://www.free-css.com/">Trueque</a> | <a href="http://www.free-css.com/">Permuta</a> | <a href="http://www.free-css.com/">Terminos de uso</a> | <a href="/eltrueque.com/inicio">Inicio</a> | <a href="http://www.free-css.com/">Disclaimer</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">Refarencias</a>
    	<br />
    	&copy; Copyright 2013 El Trueque: <a href="http://www.solucija.com/" title="Information Architecture and Web Design">eltrueque.com</a></p>
  </div>
</div>
</body>
</html>
