<?php 
// CLASE PARA CONEXION CON LA BASE DE DATOS
class miBaseDatos{
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $bbdd="bakinsweets";
  private $conexion;
    
  /*private $host="localhost";
  private $user="id5676830_mromero";
  private $pass="mromero";
  private $bbdd="id5676830_tienda2018";
  private $conexion;*/

  public function __construct(){
  	$con = new mysqli($this->host,$this->user,$this->pass,$this->bbdd);
  	if ($con->connect_errno) {
  	die("Error de conexion '".$con->connect_errno."': ".$con->connect_error);
  	}
  	$con->query("SET NAMES 'UTF-8'");
  	$this->conexion=$con;
  	return $con;
  } // fin constructor 

  // Consulta basica, devuelve el primer registro
  public function consultabasica($sentencia){
  	$fila=array();
  	if ($sentencia!="") {
  	  $resultado = $this->conexion->query($sentencia);
  	  $fila = $resultado->fetch_assoc();
  	}
  	return $fila;
  } // fin consulta basica

  // consulta para devolver listado de elementos
  public function consulta($sentencia){
  	$datos=array();
  	if ($sentencia!="") {
  	  $resultado=$this->conexion->query($sentencia);
  	  while ($fila=$resultado->fetch_assoc()) {
  	  	$datos[]=$fila;
  	  }
  	}
  	return $datos;
  } // fin consulta multiple

  // metodo para ejecutar sentencias SQL
  public function ejecutar($sentencia){
  	if ($sentencia!="") {
  	 $this->conexion->query($sentencia) OR DIE("No se ha podido ejecutar la sentencia");
  	 // para devolver el ultimo id ejecutado
  	 return $this->conexion->insert_id;
  	}
  } // fin metodo ejecutar sentencias

  public function cerrar(){
  	$this->conexion->close();
  }

} // fin clase miBaseDatos


// Clase Usuarios
class Usuarios{
  private $idUsuario;
  private $usuario; // es el correo
  private $clave;

  function __construct() {}

  // metodo para dar de alta un usuario
  public static function altaUsuario($usuario,$clave){
  	$bd = new miBaseDatos();
  	$clavencriptada=hash('ripemd160',$clave);
  	$ssql="INSERT INTO usuarios(usuario,clave) VALUES ('$usuario','$clavencriptada')";
  	$bd->ejecutar($ssql);
  	$bd->cerrar();
  } // fin alta usuario

  // buscar usuario en la bbdd por el correo
  public static function buscaUsuarioCorreo($usuario){
  	$bd=new miBaseDatos();
  	$ssql="SELECT * FROM usuarios WHERE usuario='$usuario'";
  	$datos[]=$bd->consultabasica($ssql);
  	$bd->cerrar();
  	return isset($datos[0]);
  } // fin buscaUsuarioCorreo

  // metodo para buscar usuario por correo y clave
  public static function buscaUsuario($usuario,$clave){
  	$bd=new miBaseDatos();
  	$clavencriptada=hash('ripemd160',$clave);
  	$ssql="SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clavencriptada'";
  	$datos[]=$bd->consultabasica($ssql);
  	$bd->cerrar();
  	return isset($datos[0]);
  } // fin buscaUsuario

  // metodo para buscar usuario por correo y clave
  public static function buscaUsuarioAdmin($usuario,$clave){
    $bd=new miBaseDatos();
    $clavencriptada=hash('ripemd160',$clave);
    $ssql="SELECT * FROM usuarios WHERE email='$usuario' AND clave='$clavencriptada' AND admin=1";
    $datos[]=$bd->consultabasica($ssql);
    $bd->cerrar();
    return isset($datos[0]);
  } // fin buscaUsuario

  // metodo que me devuelve el idUsuario
  public static function getIdUsuario($usuario){
  	$bd=new miBaseDatos();
  	$ssql="SELECT idUsuario FROM usuarios WHERE usuario='$usuario'";
  	$datos=$bd->consultabasica($ssql);
  	$bd->cerrar();
  	return $datos['idUsuario'];
  } // fin getIdUsuario
} // fin clase Usuarios

// clase para manejar las sesiones
class Sesiones{
  private $login=false;
  private $usuario;

  function __construct(){
  	$this->verificaLogin();
  }

  // metodo para verificar si esta creada la sesion de usuario
  private function verificaLogin(){
  	if (isset($_SESSION['usuario'])) {
  	   $this->usuario=$_SESSION['usuario'];
  	   $this->login = true;
  	}else{
  	  unset($this->usuario);
  	  $this->login=false;
  	}
  }  // fin verificaLogin

  // metodo para inicializar la sesion
  public function iniciaLogin($usuario){
  	$_SESSION['usuario']=$usuario;
  	$this->usuario=$usuario;
  	$this->login=true;
  }

  // metodo para finalizar una sesion
  public function finLogin(){
  	unset($_SESSION['usuario']);
  	unset($this->usuario);
  	$this->login=false;
  } // finLogin

  // metodo para saber si estamos o no logueados
  public function estadoLogin(){
  	return $this->login;
  }

  // metodo que me devuelve el usuario
  public function getUsuario(){
  	return $this->usuario;
  }
} // fin clase Sesiones


// Clase Categorías
class Categorias{
  private $idCategoria;
  private $nombreCategoria;
  private $descripcionCat;

  function __construct() {}

  // metodo para dar de alta una categoria
  public static function altaCategoria($nombre,$descripcion){
   $bd=new miBaseDatos();
   $ssql="INSERT INTO categorias(nombreCategoria,descripcionCat) VALUES ('$nombre','$descripcion')";
   $bd->ejecutar($ssql);
   $bd->cerrar();
  } // fin alta categoria

  // metodo para obtner el listado de las categorias
  public static function listadoCategorias(){
  	$bd = new miBaseDatos();
  	$ssql = "SELECT * FROM categorias";
  	$datos = $bd->consulta($ssql);
  	$bd->cerrar();
  	return $datos;
  } // fin listado categorias

  // metodo para eliminar una categoria
  public static function eliminarCategoria($idCategoria){
  	$bd=new miBaseDatos();
  	$ssql="DELETE FROM categorias WHERE idCategoria='$idCategoria'";
  	$bd->ejecutar($ssql);
  	$bd->cerrar();
  }

 // metodo para recuperar los datos de una categoria a través de su id
 public static function datosCategoria($idCategoria){
   $bd=new miBaseDatos();
   $ssql="SELECT * FROM categorias WHERE idCategoria=$idCategoria";
   $datos=$bd->consultabasica($ssql);
   $bd->cerrar();
   return $datos;
 } // fin datos categoria

 // metodo para modificar una categoria
 public static function modificaCategoria($idCategoria,$nombreCategoria,$descripcionCat){
   $bd=new miBaseDatos();
   $ssql="UPDATE categorias SET nombreCategoria='$nombreCategoria', descripcionCat='$descripcionCat' WHERE idCategoria=$idCategoria";
   $bd->ejecutar($ssql);
   $bd->cerrar();
 }


} // fin clase categorias


// Clase Subcategorias
class Subcategorias{
  private $idSubcat;
  private $idCategoria;
  private $nombreSubcat;
  private $descripcionSubcat;

  function __construct() {}

  // metodo para dar de alta una Subcategoria
  public static function altaSubcategoria($idCategoria,$nombreSubcat,$descripcionSubcat){
    $bd=new miBaseDatos();
    $ssql="INSERT INTO subcategorias(idCategoria,nombreSubcat,descripcionSubcat) VALUES('$idCategoria','$nombreSubcat','$descripcionSubcat')";
    $bd->ejecutar($ssql);
    $bd->cerrar();
  } // fin alta Subcategoria

  // metodo para obtener el listado de las subcategorias
  public static function listadoSubcategorias($idCategoria=0){
  	$bd = new miBaseDatos();
  	if ($idCategoria==0) {
  	$ssql = "SELECT * FROM subcategorias INNER JOIN categorias ON subcategorias.idCategoria=categorias.idCategoria ORDER BY categorias.nombreCategoria";
  	}else{
  	$ssql = "SELECT * FROM subcategorias INNER JOIN categorias ON subcategorias.idCategoria=categorias.idCategoria WHERE categorias.idCategoria='$idCategoria'";
  	}  	
  	$datos = $bd->consulta($ssql);
  	$bd->cerrar();
  	return $datos;
  } // fin listado subcategorias

  // metodo para eliminar una subcategoria
  public static function eliminarSubcat($idSubcat){
  	$bd=new miBaseDatos();
  	$ssql="DELETE FROM subcategorias WHERE idSubcat='$idSubcat'";
  	$bd->ejecutar($ssql);
  	$bd->cerrar();
  }


//método que devuelve los datos de una subcategoría con el idSubcat

  public static function datosSubcategoria($idSubcat){
    $bd=new miBaseDatos();
    $ssql="SELECT * FROM subcategorias WHERE idSubcat='$idSubcat'";
    $datos=$bd->consultabasica($ssql);
    $bd->cerrar();
    return $datos;
  } //fin método datos Subcategoría

//método para actualizar una subcategoría

  public static function actualizaSubcat($idSubcat,$nombreSubcat,$descripcionsubcat,$idCategoria){
    $bd=new miBaseDatos();
    $ssql="UPDATE subcategorias SET nombreSubcat='$nombreSubcat',descripcionsubcat='$descripcionsubcat', idCategoria='$idCategoria' WHERE idSubcat='$idSubcat'";
    $bd->ejecutar($ssql);
    $bd->cerrar();
  } //fin método actualizar subcategoría

} // fin clase Subcategorias



class Articulos{
private $idArticulo;
private $idSubcat;
private $nombreArticulo;
private $descripcion;
private $precio;
private $stock;
private $fotoArticulo;

public function __construct(){}

public static function altaArticulo($idSubcat,$nombreArticulo,$descripcion,$precio,$stock,$destino){
    $bd=new miBaseDatos();
    $ssql="INSERT INTO articulos(idSubcat,nombreArticulo,descripcion, precio, stock, fotoArticulo) VALUES('$idSubcat','$nombreArticulo','$descripcion', '$precio', '$stock', '$destino')";
    $bd->ejecutar($ssql);
    $bd->cerrar();  
}

//método para mostrar listado de artículos
public static function listadoArticulos($posicion=0, $articulosPorPagina=0, $idSubcat=0){
    $bd = new miBaseDatos();
    
    $ssql = "SELECT * FROM articulos AS a INNER JOIN subcategorias AS s ON a.idSubcat=s.idSubcat INNER JOIN categorias AS c ON s.idCategoria=c.idCategoria";

    if ($idSubcat!=0) {
      $ssql .= " WHERE a.idSubcat='$idSubcat'";
    }

    $ssql.=" ORDER BY c.nombreCategoria, s.nombreSubcat, a.nombreArticulo ";

    if ($articulosPorPagina>0) {
      $ssql.=" LIMIT $posicion,$articulosPorPagina";
    }
     
    $datos = $bd->consulta($ssql);
    $bd->cerrar();
    return $datos;
  } //fin listado Articulos


//método para buscar artículos complejo
  public static function listadoComplejo($nombreArticulo,$precio,$stock){
    if ($nombreArticulo!="") {
      $ssql="SELECT * FROM articulos AS a INNER JOIN subcategorias AS s ON a.idSubcat=s.idSubcat INNER JOIN categorias AS c ON s.idCategoria=c.idCategoria  WHERE  nombreArticulo LIKE '%$nombreArticulo' ";
        if ($precio!=0){
          switch ($precio) {
            case '1':
              $ssql.=" AND precio>0 AND precio<=10 ";
              break;
            case '2':
              $ssql.=" AND precio>10 AND precio<=20 ";
              break;
            case '3':
              $ssql.=" AND precio>20 AND precio<=30 ";
              break;
            case '4':
              $ssql.=" AND precio>30 AND precio<=50 ";
              break;
            case '5':
              $ssql.=" AND precio>50 ";
              break;
          }//fin case
        }//if precio!=0

        if($stock!=0){
          $ssql.=" AND stock<=$stock";
        }
    }//if nombreArticulo !=""
    else{
      $ssql="SELECT * FROM articulos AS a INNER JOIN subcategorias AS s ON a.idSubcat=s.idSubcat INNER JOIN categorias AS c ON s.idCategoria=c.idCategoria WHERE nombreArticulo LIKE '%%' ";

      if ($precio!=0){
          switch ($precio) {
            case '1':
              $ssql.=" AND precio>0 AND precio<=10 ";
              break;
            case '2':
              $ssql.=" AND precio>10 AND precio<=20 ";
              break;
            case '3':
              $ssql.=" AND precio>20 AND precio<=30 ";
              break;
            case '4':
              $ssql.=" AND precio>30 AND precio<=50 ";
              break;
            case '5':
              $ssql.=" AND precio>50 ";
              break;
          }//fin case
        }//if precio!=0

        if($stock!=0){
          $ssql.=" AND stock<=$stock";
        }
    }//nombreArticulo==""
    $ssql.=" ORDER BY c.nombreCategoria, s.nombreSubcat, a.nombreArticulo";
    $bd=new miBaseDatos();
    $datos=$bd->consulta($ssql);
    $bd->cerrar();
    return $datos;
  }//fin listadoComplejo


//método para eliminar artículos
  public static function eliminarArticulo($idArticulo){
    $bd=new miBaseDatos();
    $ssql="DELETE FROM articulos WHERE idArticulo='$idArticulo'";
    $bd->ejecutar($ssql);
    $bd->cerrar();
  }//fin eliminarArticulo


//método que devuelve los datos de un artículo con el idArticulo
  public static function datosArticulo($idArticulo){
    $bd = new miBaseDatos();
    
    $ssql = "SELECT * FROM articulos AS a INNER JOIN subcategorias AS s ON a.idSubcat=s.idSubcat INNER JOIN categorias AS c ON s.idCategoria=c.idCategoria WHERE idArticulo='$idArticulo'";
     
    $datos = $bd->consultabasica($ssql);
    $bd->cerrar();
    return $datos;
  }//fin verArticulos




//método para actualizar un artículo
  public static function actualizaArticulo($idArticulo,$idSubcat,$nombreArticulo,$descripcion,$precio,$stock,$destino=""){
    $bd=new miBaseDatos();
    if ($destino=="") {
      $ssql="UPDATE articulos SET idSubcat='$idSubcat',nombreArticulo='$nombreArticulo',descripcion='descripcion',precio='$precio',stock='$stock' WHERE idArticulo='$idArticulo'";
    } else {
      $ssql="UPDATE articulos SET idSubcat='$idSubcat',nombreArticulo='$nombreArticulo',descripcion='descripcion',precio='$precio',stock='$stock',fotoArticulo='$destino' WHERE idArticulo='$idArticulo'";
    }

  $bd->consultabasica($ssql);
  $bd->cerrar();

  }//fin actualizaArticulo

//devuelve el número de artículos por subcategoría
  public static function numArticulos($idSubcat){
    $bd=new miBaseDatos();
    $sentencia="SELECT count(*) AS total FROM articulos WHERE idSubcat=$idSubcat";
    $datos=$bd->consultabasica($sentencia);
    $bd->cerrar();
    return $datos['total'];
  }//fin numArticulos

} // fin clase Articulos


//clase para gestionar el carrito de la compra

class Carrito{
  private $carrito=array();
  private $estadoCarrito;

  public function __construct(){
    if (!isset($_SESSION['carrito'])) {
      $_SESSION['carrito']=null;
      $_SESSION['carrito']['precioTotal']=0;
      $_SESSION['carrito']['articulosTotal']=0;
      $this->estadoCarrito=true;
    }
    $this->carrito=$_SESSION['carrito'];
  }//fin construct


//método que devuelve el número de artículos en el carrito
  public function getArticulosTotal(){
    return $this->carrito['articulosTotal'];
  }//fin getArticulosTotal


//método que devuelve el importe total
  public function getImporteTotal(){
    return $this->carrito['precioTotal'];
  }//fin getImporteTotal


//método para añadir un artículo al carrito
  public function addArticulo($idArticulo,$nombreArticulo,$precio,$cantidad=1){
    if (!array_key_exists($idArticulo, $this->carrito)) {
      $this->carrito[$idArticulo]['nombreArticulo']=$nombreArticulo;
      $this->carrito[$idArticulo]['precio']=$precio;
      $this->carrito[$idArticulo]['cantidad']=$cantidad;
      $this->carrito[$idArticulo]['total']=$precio*$cantidad;

      $this->carrito['articulosTotal']+=$cantidad;
      $this->carrito['precioTotal']+=$precio*$cantidad;
    }

    $_SESSION['carrito']=$this->carrito;
  }//fin addArticulo


//método para vaciar el carrito
  public function vaciarCarrito(){
    unset($_SESSION['carrito']);
    unset($this->carrito);
  }


//método para ver el contenido del carrito
  public function verCarrito(){
    $i=0;
    foreach ($this->carrito as $key => $value) {
      if ($key!='precioTotal' AND $key!='articulosTotal') {
        $i++;
        echo "<div class='col-md-4'>";
        echo "<form action='indexcarrito.php' method='post'>";
          echo "Articulo: ".$value['nombreArticulo'];
          echo "<br>Precio: ".$value['precio'];
          echo "<br>Cantidad: <input type='number' name='cantidad' value='".$value['cantidad']."' min='1' max='9'>";
          echo "<br>Total: ".$value['total'];
          echo "<br><input type='submit' name='eliminar' value='Eliminar'>";
          echo "<input type='hidden' name='idArticulo' value='$key'>";
          echo "<input type='submit' name='modificarCarrito' value='Modificar'>";
        echo "<hr></form></div>";
        
        if ($i%3==0) {
          echo "<div class='clearfix visible-md'></div>";
        }
      }
    }
  }//fin verCarrito


//método para eliminar un artículo del carrito
  public function deleteArticulo($idArticulo){
    $this->carrito['precioTotal']-=$this->carrito[$idArticulo]['total'];
    $this->carrito['articulosTotal']-=$this->carrito[$idArticulo]['cantidad'];

    unset($this->carrito[$idArticulo]);

    $_SESSION['carrito']=$this->carrito;
  }//fin deleteArticulo


//método para modificar la cantidad y el total de un artículo en el carrito
  public function modificarCarrito($idArticulo,$cantidad){
    $this->carrito['precioTotal']-=$this->carrito[$idArticulo]['total'];
    $this->carrito['articulosTotal']-=$this->carrito[$idArticulo]['cantidad'];

    $this->carrito[$idArticulo]['cantidad']=$cantidad;
    $this->carrito[$idArticulo]['total']=$cantidad*$this->carrito[$idArticulo]['precio'];
    $this->carrito['precioTotal']+=$this->carrito[$idArticulo]['total'];
    $this->carrito['articulosTotal']+=$cantidad;
    $_SESSION['carrito']=$this->carrito;
  }

//Resumen del carrito
  public function resumenCarrito(){
    echo "<table class='table table-striped'>";
    echo "<tr><th>Articulo</th><th>Cantidad</th><th>Precio</th><th>Total</th></tr>";
    
    $item=""; //para PayPal
    $i=1;
    foreach ($this->carrito as $key => $value) {
      if ($key!='precioTotal' AND $key!='articulosTotal') {
        echo "<tr><td>".$value['nombreArticulo']."</td>";
        echo "<td>".$value['cantidad']."</td>";
        echo "<td>".$value['precio']."€</td>";
        echo "<td>".number_format($value['total'],'2','.','')."€</td></tr>";
        
        //variables para enviar a PayPal
        $item.="<input type='hidden' name='item_name_$i' value='".$value['nombreArticulo']."'>";
        $item.="<input type='hidden' name='amount_$i' value='".$value['precio']."'>";
        $item.="<input type='hidden' name='quantity_$i' value='".$value['cantidad']."'>";
        $item.="<input type='hidden' name='currency_code_$i' value='EUR'>";
        $i++;
      }
    }
    echo "<tr><td>TOTAL</td><td>".$this->carrito['articulosTotal']."</td><td></td><td>".number_format($this->carrito['precioTotal'],'2','.','')."€</td></tr>";
    echo "</table>";
    echo $item;
  }//fin resumenCarrito

}//fin clase Carrito


class Pedidos{
  private $idPedido;

  public function __construct(){}

  public static function altaPedido($idUsuario,$fechaPedido,$horaPedido,$totalPedido){
    $bd=new miBaseDatos();
    $ssql="INSERT INTO pedidos(idUsuario,fechaPedido,horaPedido,totalPedido) VALUES ('$idUsuario','$fechaPedido','$horaPedido','$totalPedido')";
    $idPedido=$bd->ejecutar($ssql);
    $bd->cerrar();
    return $idPedido;
  }//fin alta Pedido

}//fin clase Pedidos

class LineasPedidos{
  private $idPedido;
  private $idArticulo;

  public function __construct(){}

//método para dar de alta una línea de pedido
  public static function altaLineaPedido($idPedido,$idArticulo,$cantidad,$precio){
    $bd=new miBaseDatos();
    $ssql="INSERT INTO lineaspedidos (idPedido,idArticulo,cantidad,precio) VALUES ('$idPedido','$idArticulo','$cantidad','$precio')";
    $bd->ejecutar($ssql);
    $bd->cerrar();
  }//fin altaLineaPedido
}//fin LineasPedidos


 ?>