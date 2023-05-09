<?php
include_once('Person.php');

//Creamos el objeto con los valores que se definen en el contructor
$person = new Person('Fernado', 'Garcia');

//Mostramos por pantalla los valores
echo $person->hello();

//Destruimos el objeto
unset($person);



//