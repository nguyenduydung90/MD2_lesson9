<?php


class Queue
{
    public $listData;

    public function __construct()
    {
        $this->listData = [];
    }

    public function isEmpty()
    {
        return empty($this->listData);

    }

    public  function addPatient($name,$code)
    {
        $patein=new Patient($name,$code);
        return array_push($this->listData, $patein);
    }

    public function sort()
    {
        function mySort($a, $b)
        {
            if ($a->code == $b->code) {
                return 1;
            }
            return ($a->code > $b->code)?1:-1;
        }

        usort($this->listData, "mySort");
    }

    public function deQueue()
    {
        $curent = [];
        if ($this->isEmpty()) {
            echo 'Hết người để khám';
        }
        $pass = array_shift($this->listData);
        array_push($curent, $pass);
        return $curent;
    }
}
