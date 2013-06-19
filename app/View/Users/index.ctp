<font size="2">
    <?php 
	//Miga de Pan
	$items = array(
		array('title' => 'Gestion Usuarios', 'link' => ''),
	);
	echo $this->element('crumbs', array('items' => $items));
	
?>
</font>

<?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users', 'action' => 'add')); ?>
<center>
<br/>
<br/>
<table border = "1">
    <tr>
        <th>Id</th>
        <th>Usuario</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $this->Html->link($user['User']['username'], 
                array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?></td>
        <td><?php echo $this->Form->postLink("Eliminar", array("action" => "delete", $user["User"]["id"]),
                array("confirm" => "Esta seguro de eliminar este usuario?"))?></td>
        <td><?php echo $this->Html->link("Modificar", array("action" => "edit", $user["User"]["id"]));?></td>
    </tr>
    <?php endforeach; ?>

</table>
</center>