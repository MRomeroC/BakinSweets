<?php 
$idSubcat=$_REQUEST['idSubcat'];
$listado=Articulos::listadoArticulos(0,0,$idSubcat);

?>

<h2>Listado de Artículos</h2>
 <table>
 	<tr>
    	<th>Categoría</th>
 		<th>Subcategoría</th>
		<th>Artículo</th>
		<th>Stock</th>
 		<th> </th>
 		<th> </th>
 	</tr>
<?php 
foreach ($listado as $indice => $valor)
{
  echo "<tr>";
  echo "<td>".$valor['nombreCategoria']."</td>";
  echo "<td>".$valor['nombreSubcat']."</td>";
  echo "<td>".$valor['nombreArticulo']."</td>";
  echo "<td>".$valor['stock']."</td>";
  echo "<td><a href='admin.php?menu=33&idArticulo=".$valor['idArticulo']."&verArticulo=ok' >ver</a></td>";
  echo "<td><a href='admin.php?menu=31&idArticulo=".$valor['idArticulo']."&borrarArticulo=ok' >eliminar</a></td>";
  echo "<td><a href='admin.php?menu=34&idArticulo=".$valor['idArticulo']."&modificaArticulo=ok' >modificar</a></td>";
  echo "</tr>";
}
 ?> 	
 </table>

 <hr>
 <a href="index.php">Ir al menu principal</a>