<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$db = 'test_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nombre: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Por favor, proporciona un ID en la URL. Ejemplo: ?id=1";
}

$conn->close();
?>
