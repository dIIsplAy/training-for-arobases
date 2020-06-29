<?php 
require './class/Creneau.php';
require './class/Form.php';

// utilisation d'une fonction static
echo Form::checkbox('demo','Demo', []);
//Appel d'une class static 
echo Form::$class;

// $creneau = new Creneau(9, 12);
// $creneau2 = new Creneau(14, 16);
// var_dump(
//     $creneau->intersect($creneau2)
//     // $creneau->inclusHeure(10),
//     // $creneau2->inclusHeure(10)
// );

// echo $creneau->toHtml();