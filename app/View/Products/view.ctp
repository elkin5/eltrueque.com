<font size="2">
    <?php 
	//Miga de Pan
	$items = array(
		array('title' => ' Mis Productos ', 'link' => '/products/index'),
            array('title' => ' Descripcion ', 'link' => '')
	);
	echo $this->element('crumbs', array('items' => $items));
	
?>
<br><br>
<center>
    
    <font size="2">
    <table>
           <tr>
               <td>
              <?php echo $this->html->image('uploads/product/filename/'.$product['Product']['filename']);?><br><br>
    </td> <td></td><td></td>
    <td>
        <b> Producto:</b> <?php echo $product['Product']['nombre']?><br>
        <b>Usuario:</b> <?php echo $product['User']['nombre'];?><br>
        <b>Descripcion:</b> <?php echo $product['Product']['descripcion']?><br>
        <b> Preferencia para el cambio: </b><?php echo $product['Product']['preferencia']?><br>
        <b> Categoria:</b> <?php echo $product['Product']['categoria']?><br> 
        <b> Fecha Ingreso:</b> <?php echo $product['Product']['created']?><br><br><br><br>
    </td>
    </tr>
</table>
    
    </font>
</center>