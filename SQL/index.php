<?php
$host = 'localhost';
$user = 'root';
$password = 'rootpassword';
$dbname = 'testdb';

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $query = "SELECT * FROM users WHERE username = '$user'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nombre: " . $row["username"] . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Proporciona un nombre de usuario con ?user=<nombre>";
}
?>
