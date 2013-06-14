
<center>
    <br/>
    <br/>
    <?php echo $this->Form->create('User');?>
    <?php ?>
    
    <table border = "0" width="400" >
            <tr>
                <th>Nombre<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('nombre', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Apellido<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('apellido', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Usuario<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('username', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Email<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('email', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Contraseña<font color="red" >*</font></th>
                <th><?php echo $this->Form->input('password', array('label' => ''));?></th>
            </tr>
            <tr>
                <th>Ciudad:</th>
                <th><?php echo $this ->Form->input ('ciudad' ,array ('label' => '', 'options'=> array('Arauca'=>'Arauca','Armenia'=>'Armenia','Barranquilla'=>'Barranquilla','Bogotá'=>'Bogota','Bucaramanga'=>'Bucaramanga','Cali'=>'Cali','Cartagena'=>'Cartagena', 'Cucuta'=>'Cucuta','Florencia'=>'Florencia',
                'Ibague'=>'Ibague', 'Leticia'=>'Leticia','Manizales'=>'Manizales','Medellín'=>'Medellin','Mitu'=>'Mitu','Mocoa'=>'Mocoa','Montería'=>'Monteria','Neiva'=>'Neiva','Pasto'=>'Pasto','Pereira'=>'Pereira','Popayan'=>'Popayan','Puerto Inirida'=>'Puerto Inirida','Puerto Carreño'=>'Puerto Carreño','Quibdo'=>'Quibdo','Riohacha'=>'Riohacha','San José del Guaviare'=>'San Jose del Guaviare'
                ,'Santa Marta'=>'Santa Marta','San Andres'=>'San Andres','Sincelejo'=>'Sincelejo','Tunja'=>'Tunja','Valledupar'=>'Valledupar','Villavicencio'=>'Villavicencio','Yopal'=>'Yopal')));?></th>
            </tr>
    </table>
    <br/>
        <?php
        echo $this->Form->end('Registrar');
        ?>
    <br/>
    <br/>
    
    <?php echo $this->Html->link('Atras', array('controller' => 'inicio', 'action' => 'index')); ?>
 </center>