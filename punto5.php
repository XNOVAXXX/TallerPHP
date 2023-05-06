<?php
class Libro {
    public $titulo;
    public $autor;
    public $anio_publicacion;

    public function mostrar_detalles() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Año de publicación: " . $this->año_publicacion . "<br>";

    }

    public function comparar_paginas($libro2) {
       
        $num_paginas1 = 200;
        $num_paginas2 = 200;
        
        if ($num_paginas1 > $num_paginas2) {
            echo $this->titulo . " tiene más páginas que " . $libro2->titulo;
        }
        elseif ($num_paginas1 < $num_paginas2) {
            echo $libro2->titulo . " tiene más páginas que " . $this->titulo;
        }
        else {
            echo $this->titulo . " y " . $libro2->titulo . " tienen el mismo número de páginas";
        }
    }
}

$libro1 = new Libro();
$libro1->titulo = "El Código Da Vinci";
$libro1->autor = "Dan Brown";
$libro1->año_publicacion = 2003;

$libro2 = new Libro();
$libro2->titulo = "La sombra del viento";
$libro2->autor = "Carlos Ruiz Zafón";
$libro2->año_publicacion = 2001;

echo "Detalles del libro 1:<br>";
$libro1->mostrar_detalles();
echo "<br>";

echo "Detalles del libro 2:<br>";
$libro2->mostrar_detalles();
echo "<br>";

$libro1->comparar_paginas($libro2);
