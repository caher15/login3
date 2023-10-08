<div class="col-12">
    <h1>Login</h1>
    <form action="login.php" method="post">
    <div class="form-group">
            <label for="usuario">Nombre:</label>
            <input class="form-control" id="usuario" type="text" name="usuario" required >
        </div>
        <div class="form-group">
            <label for="palabraSecreta">Clave:</label>
            <input class="form-control" id="palabraSecreta" type="password" name="clave" required >
        </div>
        <?php
        # si hay un mensaje, mostrarlo
        if (isset($_GET["mensaje"])) { ?>
            <div class="alert alert-info">
                <?php echo $_GET["mensaje"] ?>
            </div>
        <?php } ?>
        <br>
        <button class="btn btn-success" type="submit">Iniciar sesión</button>
    </form>
</div>