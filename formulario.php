<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>calificaciones</title>
    
</head>
<body>
    <fieldset>
    <h2>calificaciones de los estudiantes </h2>
    <form action="procesando.php" method="post">
<label>calificacion 1:</label>
<input type="number"  name="n1"><br><br>
<label>calificacion 2:</label>
<input type="number"  name="n2"><br><br>
<label>calificacion 3:</label>
<input type="number"  name="n3"><br><br>
<hr>
<input   type="submit" name="calcular" value="calcular">
    </form>
    </fieldset>
    
</body>
</html>