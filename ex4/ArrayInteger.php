<?php


class ArrayInteger
{
    public $arr;
    public function __construct($arr)
    {

        $this->arr = $arr;
    }


    public function reverse()
    {
        $newArr = [];
        for ($i = 0; $i < count($this->arr); $i++) {
            array_unshift($newArr,$this->arr[$i]);
    }
        return $newArr;
    }

}
$arr=[1,2,3,4,5,6,7];
$arrayInterge=new ArrayInteger($arr);
var_dump($arrayInterge->reverse());
