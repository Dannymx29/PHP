<?php
/*De mayor a menor
Escribe una solución para una tienda donde se requiere encontrar el orden en el cual se publicarán los productos en su página web. Para esto, se debe contar con las dimensiones de cada producto y aquellos más grandes (en ancho y alto) estarán en los primeros lugares, y aquellos más pequeños estarán al final.
Tip: Como entrada, debes recibir el ancho y alto de cada producto. Analiza su tamaño y después puedes exponer la lista de productos en el orden requerido como un array*/

echo "<form action='./dimenciones.php'>";
echo "Indique la cantidad de productos que vamos a ordenar:"."<input type='number' name='productos' id='productos'>";

echo "<button type= 'submit'>Enviar</button>";

echo "</form>";

?>