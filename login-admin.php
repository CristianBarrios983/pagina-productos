<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="modulos/usuarios/acceder-admin.php" method="post" class="border p-3 bg-white needs-validation" style="width: 18rem;" novalidate>
            <h2 class="text-center">Admin</h2>
            <?php
            // En el formulario de inicio de sesión (index.php)
            session_start();

            // Verificar si hay un mensaje almacenado en la variable de sesión
            if (isset($_SESSION['mensaje'])) {
                $mensaje = $_SESSION['mensaje'];
                // Eliminar el mensaje de la variable de sesión para que no se muestre nuevamente
                unset($_SESSION['mensaje']);
            }
            ?>
            <?php if (isset($mensaje)) : ?>
                <div class="alert alert-dark" role="alert">
                    <?php echo $mensaje; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <input type="email" class="form-control rounded-0" name="correo" aria-describedby="emailHelp" placeholder="Correo electronico" required>
                <div class="invalid-feedback">
                    Campo obligatorio
                </div>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control rounded-0" name="pass" placeholder="Contraseña" required>
                <div class="invalid-feedback">
                    Campo obligatorio
                </div>
            </div>
            <button type="submit" class="btn btn-primary d-block w-100 rounded-0">Acceder</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="validation-bootstrap.js"></script>
  </body>
</html>