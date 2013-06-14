
<center>
    <br/>
    <br/>
    
<p><b>Usuario: </b><?php echo $user['User']['username']?> <br/>
    <b> Nombre:</b> <?php echo $user['User']['nombre']?><br/>
<b>Apellido: </b><?php echo $user['User']['apellido']?><br/>
<b>Email: </b><?php echo $user['User']['email']?><br/>
<b>Contraseña: </b><?php echo $user['User']['password']?><br/>
<b>Ciudad: </b><?php echo $user['User']['ciudad']?><br/>
<b>Fecha Ingreso: </b><?php echo $user['User']['created']?></p>

<br/>
<br/>
<?php echo $this->Html->link('Atras', array('controller' => 'Users', 'action' => 'index')); ?>
</center>