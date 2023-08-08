<?php

include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenge PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="user_form">
    <form action="insert_user.php" method="POST">
      <h1>Ingresar Usuario</h1>

      <input type="text" name="name" placeholder="Nombre" required>
      <input type="text" name="surname" placeholder="Apellido" required>
      <input type="text" name="email" placeholder="Correo" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <input type="password" name="repeat_password" placeholder="Repetir contraseña" required>

      <input type="submit" value="Crear Usuario">
    </form>

    <h2>Usuarios Registrados</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Password</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($query)) : ?>
          <tr>
            <th><?= $row["id"] ?></th>
            <th><?= $row["name"] ?></th>
            <th><?= $row["surname"] ?></th>
            <th><?= $row["email"] ?></th>
            <th><?= $row["password"] ?></th>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
</body>

</html>