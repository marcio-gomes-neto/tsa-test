<?php

class Question03Test extends PHPUnit\Framework\TestCase {
    public function testStringMatch(){
        $string1 = 'test1';
        $string2 = 'test1';

        $this->assertSame($string1, $string2);
    }

    public function testClassReturn(){
        require '../question03.php';
        
        $expectedMessage = 'Hello, my name is Márcio Gomes and I have 20 years old, currently working as Developer.';
        $person = new Person('Márcio Gomes', 20, 'Developer');

        $this->assertSame($expectedMessage, $person->introduceUser());
    }
}
?>