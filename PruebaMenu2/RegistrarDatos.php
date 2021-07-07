<?php 

include("PruebaConex.php");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['ID']) >= 1 && strlen($_POST['Rol']) >= 1) {
	    $ID = trim($_POST['ID']);
	    $Rol = trim($_POST['Rol']);
	    $consulta = "insert into Rol(RolID, RolNombre) values('$ID','$Rol')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se ha registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		
		} 
	}
}