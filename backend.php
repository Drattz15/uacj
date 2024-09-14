<?php
// Datos de la conexión
$host = 'sql203.infinityfree.com';
$usuario = 'if0_37311663';         
$contraseña = 'dra72650352';      
$base_de_datos = 'if0_37311663_fitlunch'; 

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Preparar y ejecutar la consulta de manera segura
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $telefono = htmlspecialchars($_POST['telefono']);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contrasena, telefono) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $email, $contrasena, $telefono);

    if ($stmt->execute()) {
        echo "Usuario registrado con éxito";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
