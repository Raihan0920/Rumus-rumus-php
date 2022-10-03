<?php
require_once 'Rumus.php';
class Segitiga extends SG
{
    public $alas;
    public $tinggi;
    public $sisi;
    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    public function NB()
    {
        $NB = "Segitiga";
        echo $NB;
    }
    public function RumusLB()
    {
        // Menghitung Luas Segitiga
        $Luas = 1 / 2 * $this->alas + $this->tinggi;
        echo $Luas;
    }
    public function RumusKB()
    {
        // Menghitung Keliling Segitiga
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        echo $keliling;
    }
    public function keterangan(){
        echo "
        alas :". $this->alas."
        tinggi :". $this->tinggi."
        sisi :". $this->sisi."";
    }
    // public function mencetak()
    // {
    //     echo "NB : " . $this->NB() . "<br>";
    //     echo "RumusLB : " . $this->RumusLB() . "<br>";
    //     echo "RumusKB : " . $this->RumusKB() . "<br>";
    // }
}
