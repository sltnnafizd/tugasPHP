<?php
    class Animal {
        public $name;
        public $legs;
        public $coldBlooded;
        public function __construct($name,$legs,$coldBlooded) {
            $this->name = $name;
            $this->legs = 4;
            $this->coldblooded = 'No';
        }

        public function __tostring(): string {
            return "Name: ".$this->name."<br>"."Legs: ".$this->legs.<br>."Cold Blooded: ".$this->coldBlooded."<br>"
        }

    }
?>