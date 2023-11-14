<!DOCTYPE html>
<html>
<head>
    <title>Docker Compose</title>
</head>
<body>
    <h1> Docker Compose-PHP</h1>
    <h4>Ashly Reyes 2020-10955</h4>
    <?php
        echo "<h2><bold>Hola Mundo desde Docker Compose</bold></h2>";
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión a MySQL fallida: " . $conn->connect_error);
        } else {
            echo "Conexión a MySQL exitosa!";
        }
    ?>
</body>
</html>