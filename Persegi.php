<?php
require_once 'Rumus.php';
class Persegi extends PG
{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang  = $panjang;
        $this->lebar = $lebar;
    }
    public function NB()
    {
        $NB = "Persegi panjang";
        echo $NB;
    }
    public function RumusLB()
    {
        // menghitung luas persegi panjang
        $luas = $this->panjang * $this->lebar;
        echo $luas;
    }
    public function RumusKB()
    {
        // menghitung keliling persegi panjang
        $keliling = 2 * ($this->panjang + $this->lebar);
        echo $keliling;
    }
    public function keterangan(){
        echo "
        panjang :". $this->panjang."
        lebar :". $this->lebar."";
    }
    // public function mencetak()
    // {
    //     echo "NB : " . $this->NB() . "<br>";
    //     echo "RumusLB : " . $this->RumusLB() . "<br>";
    //     echo "RumusKB : " . $this->RumusKB() . "<br>";
    // }
}
