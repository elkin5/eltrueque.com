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
             <font size="3">Usuario</font>
         <?php echo $this->Form->texto('username', array ('class' =>'users'));?> <br><br>
        <font size="3">
         <?php echo $this->Form->input('password', array ('class' =>'users'));?> <br><br>
         </font>
    <br/>
        <?php echo $this->Form->end(__('Ingresar')); ?>
    <br/>
    <br/>
    
   
 </center>
            
            