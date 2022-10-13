<?php
class Person {

    private $name;
    private $age;
    private $job;

    function __construct($name, $age, $job) {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    private function setName($name) {
        $this->name = $name;
    }

    private function getName() {
        return $this->name;
    }
    
    private function setAge($age) {
        $this->age = $age;
    }

    private function getAge() {
        return $this->age;
    }
    private function setJob($job) {
        $this->job = $job;
    }

    private function getJob() {
        return $this->job;
    }

    public function introduceUser(){
        return 'Hello, my name is ' . $this->name . ' and I have ' . $this->age . ' years old, currently working as ' . $this->job . '.';
    }

    public function __set($prop, $value) {
        switch($prop) {
            case 'name': 
                return $this->setName($value);
                break;
            case 'age':
                return $this->setAge($value);
                break;
            case 'job':
                return $this->setJob($value);
                break;
            default:
                echo 'Unknown property';
                break;
        }
    }

    public function __get($prop) {
        switch($prop) {
            case 'name': 
                return $this->getName();
                break;
            case 'age':
                return $this->getAge();
                break;
            case 'job':
                return $this->getJob();
                break;
            default:
                echo 'Unknown property';
                break;
        }
    }

}

$person = new Person('Márcio Gomes', 20, 'Developer');
echo $person->introduceUser();

?>