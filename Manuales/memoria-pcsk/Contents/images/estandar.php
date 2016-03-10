<?
//Nombre de los archivos:
long_file_name.php

//Variables:
$user = 'John';
$users = array('John', 'Hans', 'Arne');

$dispatcher = new Dispatcher();

//Constantes:
define('CONSTANT', 1);
define('LONG_NAMED_CONSTANT', 2);

//Estructuras de control:
if ((expr_1) || (expr_2)) {
//action_1;
} elseif (!(expr_3) && (expr_4)) {
//action_2;
} else {
//default_action;
}

//Clases:
class ExampleClass {
}

//Métodos:
public function someFunction($arg1, $arg2 = '') {
if (expr) {
statement;
}
return $var;
}

//Atributos:
#   $name Ejemplo de uso del atributo $name
class RecetasController extends AppController {
   var $name = 'Recetas';
}

?>