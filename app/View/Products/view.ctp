<br>
<br>
<center>
    <h3>Descripcion del Producto</h3> 
    <br>
    <br>
    <font size="2">
        <?php echo $this->html->image('uploads/product/filename/'.$product['Product']['filename']);?>
    <br>
    Producto: <?php echo $product['Product']['nombre']?>
    <br>
    Usuario: <?php echo $product['Product']['user_id'];?>
    <br>
    Descripcion: <?php echo $product['Product']['descripcion']?>
    <br>
    Preferencia para el cambio: <?php echo $product['Product']['preferencia']?> 
    <br>
    Categoria: <?php echo $product['Product']['categoria']?>
    <br> 
    Fecha Ingreso:b <?php echo $product['Product']['created']?>
    <br> 
    <br>
    <br>
    <br>
        <?php echo $this->Html->link('Volver', array('controller' => 'Products', 'action' => 'index')); ?>
    
    </font>
</center>