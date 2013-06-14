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
  <div class="header">
      <div class="top_info">
      <div class="top_info_right">
          <p><?php echo $this->html->link('Cerrar Sesion', array ('controller'=>'Users','action'=>'logout'));?></p>
      </div>
      
    </div>
      
    <div class="logo">
      <h1><a href="">el<span class="orange">trueque.com</span></a><sup>beta</sup></h1>
    </div>
  </div>
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
       <center> 
           <?php echo $this->html->link($this->html->image('products_icon.jpg', 
                    array("alt" => 'Mis Productos', "title" => 'Mis Productos', "border" => "0")),
                    '/products/index/', array('escape' => false));
            ?>
       </center>                                      
    </div>
   
   <div class="right_articles">
       <center> 
           <?php echo $this->html->link($this->html->image('icon_addProduct.png', 
                    array("alt" => 'Agregar Producto', "title" => 'Agregar Producto', "border" => "0")),
                    '/products/add/', array('escape' => false));
            ?>
       </center>                                      
    </div>
    
    <div class="right_articles">
       <center> 
           <?php echo $this->html->link($this->html->image('icon_oferta.png', 
                    array("alt" => 'Ver Ofertas', "title" => 'Ver Ofertas', "border" => "0")),
                    '/products/add/', array('escape' => false));
            ?>
       </center>                                      
    </div>
    
    <div class="right_articles">
       <center> 
           <?php echo $this->html->link($this->html->image('icon_micuenta.png', 
                    array("alt" => 'Mi Cuenta', "title" => 'Mi Cuenta', "border" => "0")),
                    '/products/add/', array('escape' => false));
            ?>
       </center>                                      
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