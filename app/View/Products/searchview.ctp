<font size="2">
<?php 
$items = array(array('title' => ' Busqueda Avanzada ', 'link' => ''));
echo $this->element('crumbs', array('items' => $items));
?> 
<br><br>
</font>
<center>
    <fieldset style="width:440px">
    <legend> Busqueda Avanzada</legend> 
    
    <?php echo $this->Form->create('Products', array('controller'=>'products', 'action'=>'searchadvanced'));?>
    <?php ?>
    <font size="2">
    <table border = "0" width="400" >
            <tr>
                <th>Palabra:</th>
                <th><?php echo $this->Form->input('producto', array('label' => ''));?></th>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <th>Categoria:</th>
                <th><?php echo $this ->Form->input('categoria', array('label' => '', 'options' => array('electrodomesticos' => 
                    'electrodomesticos','videojuegos'=>'videojuegos', 'joyeria'=>'joyeria','vehiculos'=>
                    'vehiculos','deportes'=>'deportes','inmobiliaria'=>'inmobiliaria')));?>
                </th>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <th>Fecha desde la cual buscar:</th>
                <th>
                    <?php echo $this->Form->input('fechainicio', array( 'type' => 'date', 'label'=>'', 'dateFormat' =>
                        'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') -15));?>
                </th>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <th>Fecha hasta la cual buscar:</th>
                <th>
                    <?php echo $this->Form->input('fechafin', array( 'type' => 
                        'date', 'label'=>'', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') -15));?>
                </th>
                <br/>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <th>Ciudad:</th>
                <th>
                    <?php echo $this->Form->input('ciudad',array ('label' => '', 'options'=> array('','Arauca','Armenia','Barranquilla','Bogotá','Bucaramanga','Cali','Cartagena', 'Cúcuta','Florencia',
                        'Ibagué', 'Leticia','Manizales','Medellín','Mitú','Mocoa','Montería','Neiva','Pasto','Pereira','Popayan','Puerto Inírida','Puerto Carreño','Quibdó','Riohacha','San José del Guaviare'
                        ,'Santa Marta','San Andres','Sincelejo','Tunja','Valledupar','Villavicencio','Yopal'))); ?>
                </th>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr>
    </table></font>
    <?php echo $this->Form->end('Buscar'); ?>
</center>

