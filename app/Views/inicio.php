<!DOCTYPE html>
<html>
<head>
<?php
  // Aquí se puede utilizar lógica PHP para determinar la URL del archivo CSS
  $cssFile = 'sesion.css';
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $cssFile; ?>">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" type="text/css" href="sesion.css">
</head>
<body>
  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar sesión</button>
    </form>
  </div>
</body>
</html>
<?php
  // Verificar si se enviaron datos de inicio de sesión
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica de verificación de inicio de sesión
    // Por simplicidad, este ejemplo solo comprueba si los campos no están vacíos
    if (!empty($username) && !empty($password)) {
      echo "Inicio de sesión exitoso. ¡Bienvenido, " . $username . "!";
    } else {
      echo "Usuario o contraseña incorrectos.";
    }
  }
?>

