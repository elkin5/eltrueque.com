<?php
$items = array(array('title' => 'Mis Productos', 'link' => '/products/index'),
    array('title' => 'Modificar', 'link' => ''));
echo $this->element('crumbs', array('items' => $items));	
?>
<center>
       <legend><h3>Modificar Producto</h3></legend>
           <?php
            echo $this->Form->create("Product", array());
            echo $this->Form->create('Product', array('type' => 'file', "action" => "edit"));?>
       <table border = "0" width="400" >
            <tr>
                <th>Nombre<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('nombre', array('label' => ''));
                echo $this->Form->input("id", array("type" => "hidden"));?></th>
            </tr>
            <tr>
                <th>Descripcion<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('descripcion', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Preferencia<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('preferencia', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Categoria<font color="red" >*</font></th>
                <th><?php echo $this ->Form->input('categoria', array('label' => '', 'options' => array('electrodomesticos' => 
                    'electrodomesticos','videojuegos'=>'videojuegos', 'joyeria'=>'joyeria','vehiculos'=>
                    'vehiculos','deportes'=>'deportes','inmobiliaria'=>'inmobiliaria')));?></th>
            </tr>
            <tr>
                <th>Imagen<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('filename', array('label' => '', 'type' => 'file')); ?>
                    <?php echo $this->Form->input('dir', array('type' => 'hidden')); ?></th>
            </tr>
    </table>
    <br/>
        <?php echo $this->Form->end('Modificar'); ?>
    <br/>
    <br/>
</center>
