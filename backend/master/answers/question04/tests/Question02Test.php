<?php
require '../question01.php';
class Question02Test extends PHPUnit\Framework\TestCase {
    private $funcionarios = [
        [
            'nome' => 'Arthur',
            'idade' => 21,
            'organizacao' => '1',
            'salario' => '1800'
        ],
        [
            'nome' => 'Eduardo',
            'idade' => 20,
            'organizacao' => '3',
            'salario' => '2000',
        ],
        [
            'nome' => 'Caio',
            'idade' => 21,
            'organizacao' => '4',
            'salario' => '3000',
        ],
        [
            'nome' => 'Guilherme',
            'idade' => 19,
            'organizacao' => '2',
            'salario' => '2200',
        ]
    ];

    public function testFunctionA(){
        $this->assertSame('Guilherme', findLowestAge($this->funcionarios));
    }

    public function testFunctionB(){
        $this->assertCount(4, filterByOrganization($this->funcionarios));
    }

    public function testFunctionC(){
        $average = 0;
        array_map(function($inst) use(&$average){
            $average += $inst['salario'];
        }, $this->funcionarios);
        $average = $average/sizeof($this->funcionarios);
        $this->assertSame($average, salaryAverage($this->funcionarios));
    }

    public function testFunctionD(){
        $sortedArr = sortByName($this->funcionarios);
        $this->assertSame('Arthur', $sortedArr[0]['nome']);
        $this->assertSame('Caio', $sortedArr[1]['nome']);
        $this->assertSame('Eduardo', $sortedArr[2]['nome']);
        $this->assertSame('Guilherme', $sortedArr[3]['nome']);
    }
}
?>