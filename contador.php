<?php 

class Counter {
    public $value;
    public function Reset() {
        $this->value = 0;
    }

    public function Add() {
        $this->value++;
    }

    public function ShowValue() {
        echo "Value: $this->value";
    }

}