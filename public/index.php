<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Electrodoméstico</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="./css/tailwind.css">
  
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Registrar Electrodoméstico</h1>
        <form id="formulario" onsubmit="mostrarTablas(event)" action="process_form.php" method="POST">
            <div class="mb-5">
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Electrodoméstico:</label>
                <input type="text" id="nombre" name="nombre" class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div class="mb-5">
                <label for="color" class="block text-gray-700 font-semibold mb-2">Color:</label>
                <input type="text" id="color" name="color" class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div class="mb-5">
                <label for="consumo" class="block text-gray-700 font-semibold mb-2">Consumo Energético (letras entre A y C):</label>
                <select id="consumo" name="consumo" class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="peso" class="block text-gray-700 font-semibold mb-2">Peso (en kg):</label>
                <input type="number" id="peso" name="peso" step="0.01" class="block w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Registrar</button>
            </div>
        </form>
    </div>
    <div id="tablas" class="flex flex-wrap justify-center space-x-2 sm:space-x-4" style="display: none;">

        <!-- Tabla de colores -->
        <table class="w-full sm:w-1/4 bg-white border border-gray-200 mb-4 sm:mb-0">
            <thead>
                <tr>
                    <th colspan="2" class="py-2 px-2 bg-gray-200 text-gray-700 text-sm">Colores</th>
                </tr>
                <tr>
                    <th class="py-2 px-2 border-t text-sm">Color</th>
                    <th class="py-2 px-2 border-t text-sm">Porcentaje de Descuento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">Blanco</td>
                    <td class="py-2 px-2 border-t text-sm">10%</td>
                </tr>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">Gris</td>
                    <td class="py-2 px-2 border-t text-sm">20%</td>
                </tr>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">Negro</td>
                    <td class="py-2 px-2 border-t text-sm">30%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tabla de consumo energético -->
        <table class="w-full sm:w-1/4 bg-white border border-gray-200 mb-4 sm:mb-0">
            <thead>
                <tr>
                    <th colspan="2" class="py-2 px-2 bg-gray-200 text-gray-700 text-sm">Consumo Energético</th>
                </tr>
                <tr>
                    <th class="py-2 px-2 border-t text-sm">Letra</th>
                    <th class="py-2 px-2 border-t text-sm">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">A</td>
                    <td class="py-2 px-2 border-t text-sm">100$</td>
                </tr>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">B</td>
                    <td class="py-2 px-2 border-t text-sm">80$</td>
                </tr>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">C</td>
                    <td class="py-2 px-2 border-t text-sm">60$</td>
                </tr>
            </tbody>
        </table>

        <!-- Tabla de peso -->
        <table class="w-full sm:w-1/4 bg-white border border-gray-200">
            <thead>
                <tr>
                    <th colspan="2" class="py-2 px-2 bg-gray-200 text-gray-700 text-sm">Peso</th>
                </tr>
                <tr>
                    <th class="py-2 px-2 border-t text-sm">Tamaño</th>
                    <th class="py-2 px-2 border-t text-sm">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">Entre 0 y 19 kg</td>
                    <td class="py-2 px-2 border-t text-sm">10$</td>
                </tr>
                <tr>
                    <td class="py-2 px-2 border-t text-sm">Entre 20 y 49 kg</td>
                    <td class="py-2 px-2 border-t text-sm">50$</td>
                </tr>
            </tbody>
        </table>
        <!-- Tabla de electrodoméstico registrado -->
        <table class="w-full sm:w-1/2 bg-white border border-gray-200">
            <thead>
                <tr>
                    <th colspan="2" class="py-2 px-2 bg-gray-200 text-gray-700 text-sm">Electrodoméstico Registrado</th>
                </tr>
                <tr>
                    <th class="py-2 px-2 border-t text-sm">Atributo</th>
                    <th class="py-2 px-2 border-t text-sm">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Procesar el formulario
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Inicializar un array asociativo para almacenar los datos del formulario
                    $datos_electrodomestico = array();

                    // Obtener los valores del formulario y guardarlos en variables
                    $nombre = $_POST["nombre"];
                    $color = $_POST["color"];
                    $consumo = $_POST["consumo"];
                    $peso = $_POST["peso"];

                    // Asignar los valores a un array asociativo
                    $datos_electrodomestico["Nombre"] = $nombre;
                    $datos_electrodomestico["Color"] = $color;
                    $datos_electrodomestico["Consumo Energético"] = $consumo;
                    $datos_electrodomestico["Peso (kg)"] = $peso;

                    // Iterar sobre el array asociativo y mostrar cada clave y valor en una fila de la tabla
                    foreach ($datos_electrodomestico as $atributo => $valor) {
                        echo "<tr>";
                        echo "<td class='py-2 px-2 border-t text-sm'>$atributo</td>";
                        echo "<td class='py-2 px-2 border-t text-sm'>$valor</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="./js/validation.js"></script>
</body>
</html>
