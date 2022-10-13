<?php
$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];


// A)
echo ('The younger person is: ');
function findLowestAge($arr){
    
    usort($arr, function($a, $b){
        return $a['idade'] <=> $b['idade'];
    });
    
    return $arr[0]['nome'];
}
echo(findLowestAge($funcionarios));


// B)
echo("\n \n");
echo('New array by organization: ');
echo("\n");
function filterByOrganization($arr){
    $filteredArr = [];

    array_map(function($inst) use(&$filteredArr){
        if (!isset($filteredArr[$inst['organizacao']])){
            $filteredArr[$inst['organizacao']] = array($inst);
        } else {
            array_push($filteredArr[$inst['organizacao']], $inst);
        }
    }, $arr);

    return $filteredArr;
}
print_r(filterByOrganization($funcionarios));


// C)
echo("\n \n");
echo('The salary average is: ');
function salaryAverage($arr) {
    $sum = 0;
    array_map(function ($inst) use(&$sum){
        $sum += $inst['salario'];
    }, $arr);

    return $sum / sizeof($arr);
}
echo (salaryAverage($funcionarios));


// D)
echo("\n \n");
echo('The array sorted by name is: ');
echo("\n");
function sortByName($arr){
    usort($arr, function($a, $b) {return strcmp($a['nome'], $b['nome']);});
    return $arr;
}
print_r(sortByName($funcionarios));
?>