<center>
    <legend><h1></h1></legend>
    <br>
    <br>
    <table border = "0" width="500" >
        <tr>
            <th>Producto</th>
            <th>Descripcion</th>
        </tr>
            <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->html->link($this->html->image('uploads/product/filename/'.$product['Product']['filename'], 
                    array("alt" => $product['Product']['nombre'], "title" => $product['Product']['nombre'], "border" => "0")),
                    '/products/view/'.$product['Product']['id'] , array('escape' => false)); ?></td>
            <td><?php echo $product['Product']['descripcion']; ?></td>
            <td><?php echo $this->Html->link("Enviar Oferta", array("action" => "edit", $product["Product"]["id"]));?></td>
        </tr>
            <?php endforeach; ?>
    </table>
</center>