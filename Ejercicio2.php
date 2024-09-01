<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Empleados y Salarios</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php

                    $empleados = [
                        "Empleado1" => [
                            "nombre" => "Stiven Agudelo",
                            "salario" => 1200000,
                            "fecha_contratacion" => "2020-01-15",
                            "departamento" => "IT"
                        ],
                        "Empleado2" => [
                            "nombre" => "Luisa Duque",
                            "salario" => 1550000,
                            "fecha_contratacion" => "2019-03-22",
                            "departamento" => "Recursos Humanos"
                        ],
                        "Empleado3" => [
                            "nombre" => "Esteban Benavides",
                            "salario" => 2600000,
                            "fecha_contratacion" => "2018-07-01",
                            "departamento" => "Finanzas"
                        ],
                        "Empleado4" => [
                            "nombre" => "Emmanuel Arredondo",
                            "salario" => 4520000,
                            "fecha_contratacion" => "2021-05-18",
                            "departamento" => "Direccion General"
                        ]
                    ];

                    foreach ($empleados as $empleado) {
                        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                        echo "<span>{$empleado['nombre']}</span>";
                        echo "<span class='badge bg-primary rounded-pill'>\$" . number_format($empleado['salario'], 2) . "</span>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>