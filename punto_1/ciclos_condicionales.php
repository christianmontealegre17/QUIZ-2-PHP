
//CICLO FOR
for ($a = 1; ; $i++) {
    if ($a > 10) {
        break;
    }
    echo $i;

//CICLO WHILE
$b = 1;
while ($b <= 10):
    echo $b;
    $b++;
endwhile;
//CONDICIONAL IF - ELSE IF - ELSE

if ('Bruce Wayne' == 'Batman') {
    echo 'Caballero de la noche Asciende';
} elseif ('Bruce Wayne' == 'Lex Luthor') {
    echo 'Much Money Bitch';
} else {
    echo 'Heroe';
}
//SWITCH
switch ($color) {
    case 0:
        echo "color es igual a amarillo";
        break;
    case 1:
        echo "color es igual a azul";
        break;
    case 2:
        echo "color es igual a rojo";
        break;
    default:
        echo "No se a que es igual";
        break;
}

//TERNARIA
$uribista ="";

$uribista = 'Bienvenido: ' . ($uribista==''?'Pendejo':$uribista);
echo $uribista;
//