<?php
class Person{
//savybės
public $vardas;
public $pavarde;

public function savybes(){

return 'Labas <i>'. $this -> vardas .$this -> pavarde. '<br>';
}
}
$vyras = new Person();
$moteris = new Person();

$vyras -> vardas = 'Jonas';
$vyras -> pavarde = 'Jonaitis';


$moteris -> vardas = 'Ona';
$moteris -> pavarde = 'Onaite';

echo $moteris-> savybes();
echo $vyras-> savybes();
?>
