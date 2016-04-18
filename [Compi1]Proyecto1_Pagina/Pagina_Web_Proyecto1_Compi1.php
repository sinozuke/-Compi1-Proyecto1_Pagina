<html>
<head>
<title>[Compi1]Proyecto1_201403775</title>
</head>
    <body BACKGROUND="29778882-Vectoriales-sin-fisuras-los-patrones-de-flores-abstractas-conjunto-Fondo-sin-fin-en-4-colores-difere-Foto-de-archivo.jpg">
    <h1 ALIGN="center">Proyecto 1 - Organizacion de Lenguajes y Compiladores 1</h1>
    <?php
    $string = file_get_contents('backlog.json');
    
    $json = json_decode($string,true);
    foreach ($json['datos_tiendas'] as $datos_tiendas)
    {
    	if($datos_tiendas!=null){
    		echo "<table width=\"100%\" border=\"1\" cellspacing=\"2\" BGCOLOR=\"GREY\">";
    		echo "<tr ALIGN=\"center\"><th colspan=\"3\"><h2>Tienda:". $datos_tiendas['Nombre']."</h2></th></tr>";
    		echo "<tr>";
    		echo "<td>Codigo:</td>";
    		echo "<td>". $datos_tiendas['codigo'] ."</td>";
    		echo "<td rowspan=\"4\"><IMG SRC=\"".$datos_tiendas['img']."\" align=\"center\" width=\"160\"\"></td>";
    		echo "</tr>";
    		echo "<tr>";
    		echo "<td>Propietario:</td>";
    		echo "<td>".$datos_tiendas['propietario']."</td>";
    		echo "</tr>";
    		echo "<tr>";
    		echo "<td>Dirreccion:</td>";
    		echo "<td>". $datos_tiendas['Dirreccion']."</td>" ;
    		echo "</tr>";
    		echo "<tr>";
    		echo "<td>Telefono:</td>";
    		echo "<td>". $datos_tiendas['telefono']."</td>" ;
    		echo "</tr>";
    		echo "<tr>";
    		echo "<td>Productos:</td>";
    		echo "<td colspan=\"2\">";
    		foreach ($json['datos_productos'] as $datos_productos){
    			if($datos_productos!=null){
    				if($datos_productos['sucursal']==datos_tiendas['codigo']){
    					echo "<dl>";
    					echo "<dt><h3>".$datos_productos['Nombre']."</h3></dt>";
    					echo "<dd>Codigo- ".$datos_productos['id']."<dd>";
    					echo "<dd>Marca- ".$datos_productos['marca']."<dd>";
    					echo "<dd>Color- ".$datos_productos['color']."<dd>";
    					echo "<dd>Cantidad- ".$datos_productos['cantidad']."<dd>";
    					echo "<dd>Tamaño- ".$datos_productos['tamaño']."<dd>";
    					echo "<dd>Sucursal- ".$datos_productos['sucursal']."<dd>";
    					if($datos_productos['img']!="vacio"){
    						echo "<img src='data:image/jpg;base64,".$datos_productos['img']." /><br>";
    					}
    					echo "</dl>";
    				}
    			}
    		};
    		echo "</td></tr>";
    		echo "</table>";
    		echo "<br>";
    	}
    };
	?>
    </body>
</html>