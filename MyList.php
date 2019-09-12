<?php


class MyList
{
    const DEFAULT_CAPACITY = 10;
    public $size;
    public $objectElements;

    public function __construct()
    {
        $this->size = 0;
        $this->objectElements = [];
    }

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->objectElements = $arr;
        } else {
            $this->objectElements = array();
        }

    }

    public function add($index, $element)
    {
        if($this-> isInteger($index)){
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++){
                if ($index != $i) {
                    array_push($newArrayList,$this->objectElements[$i]);
                } else {
                    array_push($newArrayList, $element);
                    array_push($newArrayList, $this->objectElements[$i]);
                }
                $this->objectElements = $newArrayList;
            }
        }
    }
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->objectElements = $newArrayList;
        } else {
            die("ERROR in <ArrayList class='remove'></ArrayList> <br> Integer value required");
        }
    }
    public function size() {
        return count($this->objectElements);
    }
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function get($index) {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->objectElements[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function CloneArr()
    {
        $MyList = $this->objectElements;
        return $MyList;
    }
    public function contains($obj)
    {
        for ($i = 0; $i < count($this->objectElements); $i++) {
            if ($obj == $this->objectElements[$i]) {
                echo "true";
                return true;
            } else {
                echo "false";
                return false;
            }
        }
    }
    public function indexOff($obj)
    {
        for ($i = 0; $i < count($this->objectElements); $i++) {
            if ($obj == $this->objectElements[$i]) {
                return $i;
            }
        }
        return -1;
    }
    public function addLast($element)
    {
        array_push($this->objectElements, $element);
    }
    public function clear(){
        $this->objectElements = array();
    }

}
