<?php
$func = function ($limit = NULL) use (&$func) { 
    static $current = 1;

    if ($current % 4 === 0 && $current % 5 === 0 && $current % 6 === 0) { 
        echo $current;
        return $current;
    } 

    $current++; 

    $func(); 
}; 
echo '4, 5, 6 least common multiple: ';
$func();

echo("\n \n");

$num = 1;
while ($num % 4 !== 0 || $num % 5 !== 0 || $num % 6 !== 0) {
    $num ++;
}
echo '4, 5, 6 least common multiple: ', $num;

//Nesse caso, são 2 programas muito simples, mas acredito que a recursão vai consumir mais
//desempenho por causa da repetição do if &&
?>