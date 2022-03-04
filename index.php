<?php
require("eventos.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>
</head>
<body>
    <form action="index.php" method="POST" class="formulario__login"  name="form1" id="form">
                        
        <input type="text" name="titulo" placeholder="Titulo del evento">
        <input type="date" id="fecha" name="fecha" value="" min="" max="">

        <input type="text" name="descripcion" placeholder="descripcion">
        <input type="submit" name="agregar" value="guardar evento">
        
        <!-- <a href="index.html" id="return"><input type="submit" name="" value="regresar" id="ret"></a> -->
    </form>     
    
    <?php
    if(isset($_POST['agregar'])){
        if ($_POST) {
            $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : '';
            $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : '';
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : '';

            $event = new Eventos ($titulo,$fecha,$descripcion); 
            //$event2 = new Eventos ($titulo,$fecha,$descripcion);  
            $ListaEventos = $event->Guardar_Datos();

            foreach($ListaEventos as $key => $value){
                echo $value;
                echo "<br>";
            }

        }
            //var_dump($ListaEventos);
    }
    ?>
</body>
</html>