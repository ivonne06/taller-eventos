<?php 

//Incluyendo el archivo de clase
require("eventos.php");


if ($_POST) {
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : '';
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : '';
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : '';
}

  $event = new Eventos ($titulo,$fecha,$descripcion);   

  $ListaEventos = $event->Guardar_Datos();

    foreach($ListaEventos as $key => $value){
        echo $value;
    }

        /* foreach($events as $eve => $valor){        
            echo $valor;
            echo "<br/>";             
        } */


?>