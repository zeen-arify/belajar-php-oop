<?php

class Person
{
    var $name;
    var $address;

    function sayHello (?string $name) : void
    {
        if (is_null($name)){
            echo "Hai, My Name is $this->name";
        }else{
            echo "Hai $name , My name is $this->name";
        }
    }
}