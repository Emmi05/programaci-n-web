<?php

include("PruebaConex.php"); //este documento tenerlo a la vista ya que comprueba la conexion a la base de datos

if(isset($_POST['registrar'])){
        if(strlen($_POST['matricula']) >= 1 &&                  //recuerden cambiar las variables de acuerdo a su base de datos
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido_p']) >= 1 &&
        strlen($_POST['apellido_m']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['poblacion']) >= 1 &&
        strlen($_POST['f_nacimiento']) &&
        strlen($_POST['cod_postal']) >= 1 &&
        strlen($_POST['telefono']) >= 1 && 
        strlen($_POST['curp']) >= 1){

            $matricula = trim($_POST['matricula']);                 //igual aqui tambien las variables de acuerdo a su base de datos
            $nombre = trim($_POST['nombre']);
            $apellido_p = trim($_POST['apellido_p']);
            $apellido_m = trim($_POST['apellido_m']);
            $direccion = trim($_POST['direccion']);
            $poblacion = trim($_POST['poblacion']);
            $f_nacimiento = trim($_POST['f_nacimiento']);
            $cod_postal = trim($_POST['cod_postal']);
            $telefono = trim($_POST['telefono']);
            $curp = trim($_POST['curp']);

            //Para la seccion de insert que esta abajo van a phpmyadmin, seleccionan la tabla, arriba le dan en SQL y abajo en letras grandes
            //Le dan clic en INSERT y lo pegan despues de $consulta y tiene que quedar similar
            $consulta = "INSERT INTO alumnos(matricula, nombre, apellido_p, apellido_m, direccion, poblacion, f_nacimiento, cod_postal, telefono, curp) VALUES ('$matricula', '$nombre', '$apellido_p', '$apellido_m', '$direccion', '$poblacion', '$f_nacimiento', '$cod_postal', '$telefono', '$curp')";
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
    }else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }     
}