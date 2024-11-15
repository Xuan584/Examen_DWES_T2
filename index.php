<?php
// TODO Importar las clases
require 'model/Articulo.php';
require 'model/Bebida.php';
// Array asociativo del menú
$menu = [
    new Articulo("Ensalada César", 8.50, true, "Entrante"),
    new Articulo("Hamburguesa Clásica", 12.00, true, "Principal"),
    new Articulo("Pizza Margarita", 10.00, false, "Principal"), // No disponible
    new Articulo("Spaghetti Boloñesa", 11.00, true, "Principal"),
    new Articulo("Sopa de Tomate", 7.00, false, "Entrante"), // No disponible
    new Bebida("Coca-Cola", 2.50, true, "Bebida", "Mediano", "Fría"),
    new Bebida("Café", 1.50, true, "Bebida", "Pequeño", "Caliente"),
    new Bebida("Té Helado", 2.00, false, "Bebida", "Grande", "Fría"), // No disponible
    new Bebida("Jugo de Naranja", 3.00, false, "Bebida", "Mediano", "Fría") // No disponible
];

$ubicaciones = [
    "Centro" => [
        "direccion" => "Calle Mayor 123, Centro",
        "telefono" => "123-456-789",
        "horario" => "10:00 - 22:00"
    ],
    "Norte" => [
        "direccion" => "Avenida Norte 456, Zona Norte",
        "telefono" => "987-654-321",
        "horario" => "11:00 - 20:00"
    ],
    "Sur" => [
        "direccion" => "Boulevard Sur 789, Zona Sur",
        "telefono" => "654-321-987",
        "horario" => "10:00 - 23:00"
    ]
];

$pedido = ["Ensalada César", "Pizza Margarita", "Café", "Gambas"];

// TODO Filtrar platos por disponibilidad, guardando en variable $disponibles
$disponibles = array_filter($menu, function($articulo) {
    return $articulo->disponibilidad == true;
});

//////////////////////////////
//        FUNCIONES         //
//////////////////////////////

// TODO Función para imprimir una lista de artículos con nombre y precio
function imprimirListaArticulos($articulos) {
    foreach($articulos as $articulo) {
        echo "<li>Nombre: " . $articulo->nombre . " - Precio: $" . $articulo->precio . "</li>";
    }
}

// TODO Función para imprimir un pedido
function imprimirPedido($pedido, $menu) {
    $menuMap = [];
    foreach($menu as $articulo) {
        $menuMap[$articulo->nombre] = $articulo;
    }

    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Precio</th></tr>";

    $total = 0; 

    foreach($pedido as $nombrePedido) {
        echo "<tr>";
        if (isset($menuMap[$nombrePedido])) {
            $articulo = $menuMap[$nombrePedido];
            echo "<td>" . $articulo->nombre . "</td>";
            echo "<td>$" . $articulo->precio . "</td>";
            $total += $articulo->precio;
        } else {
            echo "<td>" . $nombrePedido . "</td>";
            echo "<td>No disponible</td>";
        }
        echo "</tr>";
    }

    echo "<tr><td><strong>Total</strong></td><td><strong>" . $total . "€</strong></td></tr>";
    echo "</table>";
}




// TODO Función para imprimir las ubicaciones
function imprimirUbicaciones($ubicaciones) {
    foreach($ubicaciones as $nombre => $datos) {
        echo "<li><strong>$nombre:</strong>   $datos[direccion]. ". "Teléfono: " . "$datos[telefono]. "."Horario: " . "$datos[horario]. ". "</li>";
    }
}

?>

<h2>Menú Completo:</h2>
<ul>
    <?php imprimirListaArticulos($menu); ?>
</ul>


<h2>Platos disponibles:</h2>
<ul>
    <?php imprimirListaArticulos($disponibles); ?>
</ul>


<h2>Pedido realizado:</h2>
<?php
imprimirPedido($pedido, $menu);
?>


<h2>Ubicaciones de Recogida:</h2>
<?php imprimirUbicaciones($ubicaciones); ?>
