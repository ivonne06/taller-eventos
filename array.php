 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>


 <?php
/*  require("eventos.php");
 session_start(); */

 //Utilizando autocarga de clases
function __autoload($classname){
    require "class/" . $classname . ".class.php";
}
 session_start();

 if(isset($_POST['agregar'])){
    if ($_POST) {
        $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : '';
        $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : '';
        $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : '';

        $event = new Eventos ($titulo,$fecha,$descripcion); 
        
        if(!empty($_POST['valores'])){
            $valores=explode(",", $_POST['valores']);
        }else{
            $valores=array();
        }


        foreach($event as $key => $value){
            array_push($valores, $value );
        }


        $_SESSION['data']=$valores;

        //$ListaEventos = $event->Guardar_Datos();
        
        foreach($valores as $val => $valor2 ){
        echo $valor2."  ";
        }
        echo "<br>";

    }           
}
$Usuario = new Usuario();
$nombre = $Usuario->getNombre();
 ?>
 
 <div><a href="index.php?usuario=" . $nombre>Regresar</a></div>
 <div><a href="array.php">Borrar</a></div>
 <div><a href="login.php">Cerrar Sesion</a></div>
 
    
 </body>
 </html>