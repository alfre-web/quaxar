<?php
    require_once 'includes/header.php';
?>
    <section class="login">
        <form class="contenedor" id="guardar-login" method="POST" action="acciones.php">
            <div class="formulario">
                <h2 style="text-align:center;">Login</h2>
                <label for="correo">Correo:</label>
                <input type="email" name="email" placeholder="Ingrese su correo">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Ingrese su password">
                <div class="enviar">
                    <input type="hidden" name="registro" value="login">
                    <input type="submit" class="btn">
                    <p style="text-align:right;">¿No tienes una cuenta?</p>
                    <p style="text-align:right;">Haga click 
                        <a href="registro.php" style="color:red">
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