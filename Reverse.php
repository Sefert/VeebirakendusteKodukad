<?php

/**
 * Created by PhpStorm.
 * User: marko
 * Date: 02/04/2017
 * Time: 10:01
 */
class Reverse
{
    private $name;
    private $uus;
    private $j;
    public function _construct($name)
    {
        $this->name = $name;
        $this->j = strlen($name);
        $this->backwardsGen();
    }
    function getUus(){
        return $this->uus;
    }
    function backwardsGen(){
        if ($this->j >= 0){
            $letter = substr($this->name,$this->j,1);
            $this->uus=$this->uus.$letter;
            $this->j--;
            $this->backwardsGen();
        }
    }
}