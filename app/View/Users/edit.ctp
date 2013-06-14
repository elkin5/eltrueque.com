
<center>
    <br/>
    <br/>
    <?php
        echo $this->Form->create("User", array("action" => "edit"));
        echo $this->Form->input("id", array("type" => "hidden"));
        echo $this->Form->input('nombre', array('label' => 'Nombre: '));
        echo $this->Form->input('apellido', array('label' => 'Apellido: '));
        echo $this->Form->input('username', array('label' => 'Usuario: '));
        echo $this->Form->input('email', array('label' => 'Email: '));
        echo $this->Form->input('password', array('label' => 'Contraseña: '));
        echo $this->Form->input('ciudad', array('label' => 'Ciudad: '));
        echo $this->Form->end("Modificar");
        ?>
    <br/>
    <br/>
    
    <?php echo $this->Html->link('Atras', array('controller' => 'Users', 'action' => 'index')); ?>
</center>