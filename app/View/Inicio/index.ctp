<html>
<head>
<title>Pagina Principal</title>
</head>
<body>
<center>
    <legend><h1> Bienvenidos a ElTrueque.com</h1></legend></center><br/>
    <p>
        <font size="2">ElTrueque.com es un sistema de intercambio de objetos y/o servicios, en donde no hay dinero de por medio.<br/>
              puedes conseguir lo que necesitas con lo que ya no utilizas.</font>
        <br/><br/>
    </p>
   <center><b><font size="2"> Categorias de los productos </font></b></center> <br><br/>
   <font size="2">
   <table>
    <tr> 
        <td>
            <?php echo $this->html->image('electrodomestico.jpg');?><br/> 
    <center><a href='/eltrueque.com/products/searchini?search=electrodomesticos'>Electrodomesticos</a></center>
        </td> 
        <td>
            <?php echo $this->html->image('videojuego.jpg');?><br/>
    <center><a href='/eltrueque.com/products/searchini?search=videojuegos'>Videojuegos</a></center>
        </td>
        <td>
            <?php echo $this->html->image('joyeria.png');?>  <br/>      
        <center><a href='/eltrueque.com/products/searchini?search=joyeria'>Joyeria</a></center>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $this->html->image('vehiculo.jpg');?>
    <center><a href='/eltrueque.com/products/searchini?search=vehiculos'>vehiculos</a></center>
        </td>
        <td>
            <?php echo $this->html->image('deporte.jpg');?>
        <center><a href='/eltrueque.com/products/searchini?search=deportes'>Deportes</a></center>
        </td>
        <td>
            <?php echo $this->html->image('inmobiliaria.jpg');?> <br>
        <center><a href='/eltrueque.com/products/searchini?search=otros'>Inmobiliaria</a></center>
        </td>
   </tr>
 
   </table>
     </font>
</center>
</body>
</html>