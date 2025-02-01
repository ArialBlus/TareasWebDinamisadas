<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Formulario para determinar si es mayor de edad</h2>
    
    <!-- Formulario para calcular la edad -->
    <form action="{{ route('calculateMajorityOld') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="lastName" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>

        <div class="mb-3">
            <label for="dateOfBirth" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <!-- Alerta de resultado -->
    @if(isset($result))
        <div class="alert alert-info mt-3">
            <strong>Resultado:</strong> {{ $result }}
        </div>
    @endif

    <!-- Mostrar la edad calculada -->
    @if(isset($age))
        <div class="alert alert-info mt-3">
            <strong>Edad:</strong> {{ $age }} años
        </div>
    @endif
</div>

<!-- Bootstrap JS (opcional, para algunos componentes interactivos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
