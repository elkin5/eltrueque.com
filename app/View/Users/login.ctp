<font size="2">
    <?php 
	//Miga de Pan
	$items = array(
		array('title' => ' Inicio Sesion', 'link' => ''),
	);
	echo $this->element('crumbs1', array('items' => $items));
	
?>
<center>
    <br/>
    <br/>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <?php ?>
    <fieldset style="width:350px">
       <legend>Iniciar sesi&oacute;n</legend> <br><br>
       <font size="2">
     <table border = "0" width="400" >
            <tr>
                <th>Usuario:</th>
                <th><?php echo $this->Form->input('username', array('label' => '')); ?></th>
            </tr><tr></tr><tr></tr>
            <tr>
                <th>Contraseña:</th>
                <th><?php echo $this->Form->input('password', array('label' => ''));?></th>
            </tr>
    </table><br>
    </font>
        <?php echo $this->Form->end(__('Ingresar')); ?>
    <br/>
    
    <font size="2"> <?php echo $this->html->link('Has olvidado tu contraseña', array ('controller'=>'Users','action'=>'correo'));?></font>
    <br><br>
 </center>
            
            