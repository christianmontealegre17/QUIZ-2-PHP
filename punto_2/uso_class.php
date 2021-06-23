<?php
require_once "class_nombre.php";
//EN ESTE ARCHIVO USAS TU CLASE
$b_persona = new cliente('cristian','soacha',60);

//base
$base = $b_persona->pedir_infos();
echo $base;
echo "<br><hr>";