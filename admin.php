<?php
    require_once 'conexion.php';
    require_once 'includes/funciones/sesiones.php';
    require_once 'includes/header.php';
   
?>
    
    <?php

        $sql = "SELECT * FROM usuarios";
        $resultado = $conn->query($sql);
    
    ?>

    <div class="usuario-content">
        <h2 class="" style="text-align: center;">Bienvenido: <?= $_SESSION['nombre'];?></h2>

        <a href="includes/funciones/cerrar_sesion.php">Cerrar sesión</a>
    </div>

    <table style="display: flex; justify-content:center">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Genero</th>
            <th style="width: 500px;">Pasatiempo</th>
        </tr>
        <?php while($user = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['nombre']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['edad']; ?></td>
                <td><?= $user['genero']; ?></td>
                <td><?= $user['pasatiempo']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

<?php
    require_once 'includes/footer.php';
?>