
<center>
    <br/>
    <br/>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <?php ?>
    <table border = "0" width="400" >
            <tr>
                <th>Usuario:</th>
                <th><?php echo $this->Form->input('username', array('label' => '')); ?></th>
            </tr>
            <tr>
                <th>Contraseña:</th>
                <th><?php echo $this->Form->input('password', array('label' => ''));?></th>
            </tr>
    </table>
    <br/>
        <?php echo $this->Form->end(__('Ingresar')); ?>
    <br/>
    <br/>
    
    <?php echo $this->Html->link('Atras', array('controller' => 'inicio', 'action' => 'index')); ?>
 </center>
            
            