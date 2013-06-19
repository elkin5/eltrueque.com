<?php
    $items = array(array('title' => 'Agregar Oferta', 'link' => ''));
    echo $this->element('crumbs', array('items' => $items));
?>

<center>
    <br/>
    <br/>
    <?php echo $this->Form->create('Oferta');?>
    <?php ?>
    
    <table border = "0" width="400" >
            
            <tr>
                <th>Descripcion<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('descripcion', array('label' => ''));
                echo $this->Form->input("id", array("type" => "hidden"))?></th>
            </tr>
    </table>
    <br/>
        <?php echo $this->Form->end('Agregar'); ?>
    <br/>
    <br/>
    
    <?php echo $this->Html->link('Atras', array('controller' => 'inicio', 'action' => 'index')); ?>
 </center>