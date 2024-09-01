<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Productos Disponibles</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php

                    $productos = [
                        "Producto1" => [
                            "nombre" => "Computador portátil básico HP",
                            "precio" => 1250999,
                            "detalles" => [
                                "disponibilidad" => true,
                                "reseñas" => 4.5
                            ]
                        ],
                        "Producto2" => [
                            "nombre" => "Computador portátil Gamer Lenovo",
                            "precio" => 4500000,
                            "detalles" => [
                                "disponibilidad" => true,
                                "reseñas" => 4.7
                            ]
                        ],
                        "Producto3" => [
                            "nombre" => "Monitor 24 pulgadas Acer",
                            "precio" => 450000,
                            "detalles" => [
                                "disponibilidad" => true,
                                "reseñas" => 4
                            ]
                        ],
                        "Producto4" => [
                            "nombre" => "Monitor 27 pulgadas Asus",
                            "precio" => 935000,
                            "detalles" => [
                                "disponibilidad" => true,
                                "reseñas" => 4.8
                            ]
                        ],
                        "Producto5" => [
                            "nombre" => "Teclado mecánico 60%",
                            "precio" => 325000,
                            "detalles" => [
                                "disponibilidad" => true,
                                "reseñas" => 4.8
                            ]
                        ],
                        "Producto6" => [
                            "nombre" => "Teclado estándar",
                            "precio" => 50000,
                            "detalles" => [
                                "disponibilidad" => false,
                                "reseñas" => 4.8
                            ]
                        ]
                    ];

                    foreach ($productos as $producto) {
                        if ($producto['detalles']['disponibilidad']) {
                            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                            echo "<span>{$producto['nombre']}</span>";
                            echo "<span class='badge bg-success rounded-pill'>\$" . number_format($producto['precio'], 2) . "</span>";
                            echo "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>