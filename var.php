<?php 

require("arregloeventos.php");
        $lista = array();

        $events= new Eventos ();            
        $events->Set_titulo($_POST['titulo']);
        $events->Set_fecha($_POST['fecha']);
        $events->Set_descripcion($_POST['descrip']);
        
        array_push($lista, $events);   

        foreach($lista as $events){
            echo $events;
        }

        /* foreach($events as $eve => $valor){        
            echo $valor;
            echo "<br/>";             
        } */


  ?>