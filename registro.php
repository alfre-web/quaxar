<?php
    require_once 'includes/header.php';
?>

<section class="login">
        <form class="contenedor" id="guardar-registro" method="POST" action="acciones.php">
            <div class="formulario">
                <h2 style="text-align:center;">Registro</h2>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese su Nombre">
                <label for="correo">Correo:</label>
                <input type="email" name="email" placeholder="Ingrese su Correo">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" placeholder="Ingrese su Edad">
                <label for="genero">Genero:</label>
                <select name="genero" id="">
                    <option value="">---Seleccione---</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
               
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Ingrese su contraseña">
                
                <label for="">Pasatiempo</label>
                <textarea name="pasatiempo" id="" cols="27" rows="8"></textarea>
                <div class="enviar">
                    <input type="hidden" name="registro" value="guardar">
                    <input type="submit" class="btn">
                    <p style="text-align:right;">¿Tienes una cuenta?</p>
                    <p style="text-align:right; margin:0;">Haga click 
                        <a href="index.php" style="color:red">
                            Aquí
                        </a>
                    </p>
                </div>
            </div>
        </form>
    </section>

<?php
    require_once 'includes/footer.php';
?>