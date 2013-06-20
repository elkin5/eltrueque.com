<font size="2">
    <?php 
	//Miga de Pan
	$items = array(
		array('title' => ' Inicio Sesion ', 'link' => '/users/login'),
            array('title' => ' Email', 'link' => '')
	);
	echo $this->element('crumbs1', array('items' => $items));
	
?>
</font>

<br><br>

<body>
	<div class="content">

            <div class="left">               
                <font size="2">  <p>Digita tu correo electronico y te enviaremos tu nombre de usuario y contraseña</p></font>
                       <font size="3">* Email:</font> 
                        <?Php echo $this->Form->text(''); ?> <br></br>
                       
                      <?php echo $this->Form->end('enviar'); ?><br>        
            </div>


                  </div>
	
</body>
</html>