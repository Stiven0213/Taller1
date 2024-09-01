<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedios de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Promedio de Calificaciones de Estudiantes</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php

                    $estudiantes = [
                        "Stiven" => [3.5, 4, 5],
                        "Luisa" => [5, 4.7, 4],
                        "Esteban" => [4.5, 3, 3.2],
                        "Manu" => [5, 4, 5]
                    ];

                    $mejorEstudiante = "";
                    $mejorPromedio = 0;

                    foreach ($estudiantes as $nombre => $calificaciones) {
                        $promedio = array_sum($calificaciones) / count($calificaciones);
                        $promedioFormateado = number_format($promedio, 2);


                        if ($promedio > $mejorPromedio) {
                            $mejorPromedio = $promedio;
                            $mejorEstudiante = $nombre;
                        }

                        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                        echo "<span>$nombre</span>";
                        echo "<span class='badge bg-primary rounded-pill'>$promedioFormateado</span>";
                        echo "</li>";
                    }

                    $mejorPromedioFormateado = number_format($mejorPromedio, 2);
                    ?>
                </ul>
                <div class="alert alert-success text-center mt-4">
                    <?php echo "El estudiante con el mejor promedio es <strong>$mejorEstudiante</strong> con un promedio de <strong>$mejorPromedioFormateado</strong>"; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>