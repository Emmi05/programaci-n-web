<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de Roles</title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="estilos.css">
</head>
<body> 
    <form method="post">
        <h1>Formulario de Registro</h1>  
        <input type="text" name="ID" placeholder="RolID" required >
        <input type="text" name="Rol" placeholder="RolNombre" required >
        <input type="submit" name="Registrar">
    </form>

    <?php
    include("RegistrarDatos.php")
    ?>

</body>
</html>