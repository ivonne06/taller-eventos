<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>
</head>
<body>
    <form action="var.php" method="POST" class="formulario__login"  name="form1" id="form">
                        
        <input type="text" name="titulo" placeholder="Titulo del evento">
        <input type="date" id="fecha" name="fecha" value="" min="" max="">

        <input type="text" name="descripcion" placeholder="descripcion">
        <input type="submit" name="agregar" value="guardar evento">
        
    </form>               
</body>
</html>