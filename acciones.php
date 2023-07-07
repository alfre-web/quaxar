<?php

require_once 'conexion.php';

if($_POST['registro'] == 'guardar') {
   
    $nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : false;
    $email = !empty($_POST['email']) ? $_POST['email'] : false;
    $edad = !empty($_POST['edad']) ? $_POST['edad'] : false;
    $genero = !empty($_POST['genero']) ? $_POST['genero'] : false;
    $password = !empty($_POST['password']) ? $_POST['password'] : false;
    if($genero == 'M') {
        $generoN = "Masculino";
    } else {
        $generoN = "Femenino";
    }
    $pasatiempo = !empty($_POST['pasatiempo']) ? $_POST['pasatiempo'] : false;

    if(!empty($nombre) && !empty($email) && !empty($edad) && !empty($genero) && !empty($pasatiempo) && !empty($password)) {

        try {

            $opciones = array(
                'cost' => 12
            );

            $password_hash = password_hash($password, PASSWORD_BCRYPT, $opciones);

            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, edad, genero, pasatiempo, password) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param('ssisss', $nombre, $email, $edad, $generoN, $pasatiempo, $password_hash);
            $stmt->execute();
            $id_registro = $stmt->insert_id;
            if($id_registro > 0) {
                $respuesta = array(
                    'respuesta' => 'exito',
                    'id_registro' => $id_registro
                );
                
            } else {
                $respuesta = array(
                    'respuesta' => 'Error'
                );
            }
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            $respuesta = array(
                'respuesta' => $e->getMessage()
            );
        }

    } else {
        $respuesta = array(
            'respuesta' => 'Error'
        );
    }
    die(json_encode($respuesta));
   


}

if($_POST['registro'] == 'login') {
    $email = !empty($_POST['email']) ? $_POST['email'] : false;
    $password = !empty($_POST['password']) ? $_POST['password'] : false;

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($id_usuario, $usuario_nombre, $usuario_email, $user_edad, $usuario_genero, $user_pasatiempo, $user_pass);
        if($stmt->affected_rows) {
            $existeUser = $stmt->fetch();
            if($existeUser) {
                if(password_verify($password, $user_pass)) {
                    session_start();
                    $_SESSION['nombre'] = $usuario_nombre;
                    $_SESSION['email'] = $usuario_email;

                    $respuesta = array(
                        'respuesta' => 'exito',
                        'usuario' => $usuario_nombre
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'Error'
                    );
                }
            } else {
                $respuesta = array(
                    'respuesta' => 'Error'
                );
            }
        } else {
            $respuesta = array(
                'respuesta' => 'Error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
    
}

?>