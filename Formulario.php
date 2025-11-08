<?php require_once __DIR__ . '/includes/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <a href="index.html" class="btn btn-secondary mb-4">← Volver</a>
    <h1 class="text-center mb-4">Formulario de Inscripción</h1>
    <p class="text-center">Completa este formulario para inscribirte a nuestra red solidaria de rescate a mascotas.</p>

    <!-- Agregamos action y method -->
    <form action="guardar_inscripcion.php" method="POST">
        <div class="mb-3">
            <label for="nombreCompleto" class="form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del por qué nos quieres ayudar:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terminos" required>
            <label class="form-check-label" for="terminos">
                Acepto los términos y condiciones.
            </label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar Inscripción</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>