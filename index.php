<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de ejemplo</title>
</head>
<body>
    <h1>Conexión a MySQL desde PHP</h1>
    <?php
    // Capturar las variables de entorno para acceder a MySQL
    $db_host = getenv('DB_HOST');
    $db_user = getenv('DB_USER');
    $db_password = getenv('DB_PASSWORD');

    // Realizar la conexión a MySQL
    $conn = new mysqli($db_host, $db_user, $db_password);

    // Verificar la conexión
    if ($conn->connect_error) {
        echo "<p>Error al conectar a MySQL: " . $conn->connect_error . "</p>";
    } else {
        echo "<p>Conexión exitosa a MySQL</p>";
        // Aquí puedes continuar con tu lógica de aplicación
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
