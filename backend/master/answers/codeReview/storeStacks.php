<?php
include 'Person.php';
$person = new Person('Augusto Pereira', '6199610-5439', 'augusto-pereira91@gmail.com', 'Google');
print_r($person->storeStacks('NodeJs'));
print_r($person->storeStacks(['Js', 'Php', 'C#']));

?>