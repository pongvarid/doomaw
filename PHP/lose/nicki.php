<?php


class nicki {
    private $name;
    
    public function getName($name){
        $this->name = $name;
    }
    
    public function setName(){
        return $this->name;
    }
}
