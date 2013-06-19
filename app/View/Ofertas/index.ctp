
<?php
$items = array(array('title' => ' Mis Productos ', 'link' => ''));
echo $this->element('crumbs', array('items' => $items));
$color[0]="#D1DBE1";
$color[1]="#E2EBF0";
$i=0; 
?>
<center> 
    <legend><h3>Mis Productos</h3></legend>
    <br>
    <br>
    <table border = "1" width="500" style="font-size:12px" >
        <tr>
            <th bgcolor='#E6E6E6'>Id</th>
            <th bgcolor='#E6E6E6'>Producto</th>
            <th bgcolor='#E6E6E6'>Acciones</th>
        </tr>
            <?php foreach ($products as $product): ?>
        <tr bgcolor="<?php print $color[($i++)%2]; ?>"> 
            <td><?php echo $product['Product']['id']; ?></td>
            <td><?php echo $this->Html->link($product['Product']['nombre'], 
                    array('controller' => 'products', 'action' => 'view', $product['Product']['id'])); ?></td>
            <td><?php echo $this->html->link($this->html->image('drop.png', array("alt" => "Eliminar", "title" => "Eliminar", "border" => "0")),
                      '/products/delete/'.$product['Product']['id'], array('escape' => false), '¿Est&aacute; seguro que desea eliminar el producto?');
                     echo $this->html->link($this->html->image('b_edit.png', array("alt" => "Modificar", "title" => "Modificar", "border" => "0")),
                      '/products/edit/'.$product['Product']['id'] , array('escape' => false)); ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
</center>