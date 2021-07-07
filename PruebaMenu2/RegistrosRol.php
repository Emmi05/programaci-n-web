<?php
$inc = include("PruebaConex.php");

If($inc){
    $consulta = "select * from Rol";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $ID = $row['RolId'];
            $Rol = $row['RolNombre'];
            ?>
            <div>
                <h4>ID: <?php echo $ID; ?></h4>
                <b> Rol: </b> <?php echo $Rol; ?>

            </div>
            <?php
        }
    }

}
