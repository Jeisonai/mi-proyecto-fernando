
<?php
require_once __DIR__ . '/includes/config.php';

// Recuperar los datos enviados por POST
$nombre = $_POST['nombreCompleto'] ?? '';
$email = $_POST['email'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';

if ($nombre && $email && $telefono && $descripcion) {
    $sql = "INSERT INTO inscripciones (nombre, email, telefono, descripcion) 
            VALUES (:nombre, :email, :telefono, :descripcion)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':email' => $email,
        ':telefono' => $telefono,
        ':descripcion' => $descripcion
    ]);

    echo "<div style='text-align:center; margin-top:50px; font-family:Arial'>
            <h2>✅ ¡Gracias por inscribirte, $nombre!</h2>
            <p>Tu registro se ha guardado correctamente.</p>
            <a href='index.html'>Volver al inicio</a>
          </div>";
} else {
    echo "<p>Faltan datos del formulario.</p>";
}
