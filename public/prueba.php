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
        <form action="process_form.php" method="POST">
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
    <div class="flex flex-wrap justify-center space-x-2 sm:space-x-4">

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
</div>
<script src="./js/validation.js"></script>
</body>
</html>