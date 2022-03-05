 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title></title>
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

 ?>
 
 <a href="http://localhost/taller_main/index.php"><input type="submit" name="" value="Regresar"></a>
 <a href="http://localhost/taller_main/array.php"><input type="submit" name="" value="Borrar todo">
    </a>
    <a href="http://localhost/taller_main/login.php"><input type="submit" name="" value="cerrar sesion"></a>
 </body>
 </html>