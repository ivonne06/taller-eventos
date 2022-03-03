<?php 

require("arregloeventos.php");
        $events= new Eventos ();            
        $events->Set_titulo($_POST['titulo']);
        $events->Set_fecha($_POST['fecha']);
        $events->Set_descripcion($_POST['descrip']);
                

                   
            foreach($events as $eve => $valor){        
                echo $valor;
                echo "<br/>";             
             }


  ?>