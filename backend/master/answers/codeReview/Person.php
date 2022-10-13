<?php
class Person {
    private $name;
    private $phone;
    private $email;
    private $org;
    private $stacks = [];
    
    function __construct($name, $phone, $email, $org) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->org = $org;
    }

    private function setName($name) {
        $this->name = $name;
    }
    private function getName() {
        return $this->name;
    }

    private function setPhone($phone) {
        $this->phone = $phone;
    }
    private function getPhone() {
        return $this->phone;
    }

    private function setEmail($email) {
        $this->email = $email;
    }
    private function getEmail() {
        return $this->email;
    }

    private function setOrg($org) {
        $this->org = $org;
    }
    private function getOrg() {
        return $this->org;
    }
    
    private function setStacks($stacks){
        if(gettype($stacks) === 'array'){
            foreach ($stacks as $value) {
                array_push($this->stacks, $value);
            }
        }
        if(gettype($stacks) === 'string'){
            array_push($this->stacks, $stacks);
        }
    }
    private function getStacks(){
        return $this->stacks;
    }

    public function __set($prop, $value) {
        switch($prop) {
            case 'name': 
                return $this->setName($value);
                break;
            case 'phone':
                return $this->setPhone($value);
                break;
            case 'email':
                return $this->setEmail($value);
                break;
            case 'org':
                return $this->setOrg($value);
                break;
            case 'stacks':
                return $this->setStacks($value);
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
            case 'phone':
                return $this->getPhone();
                break;
            case 'email':
                return $this->getEmail();
                break;
            case 'org':
                return $this->getOrg();
                break;
            case 'stacks':
                return $this->getStacks();
                break;
            default:
                echo 'Unknown property';
                break;
        }
    }

    public function storeStacks($stacks){
        $this->setStacks($stacks);
        return $this->getStacks();
    }
}
?>