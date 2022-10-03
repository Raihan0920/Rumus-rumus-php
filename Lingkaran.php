<?php
require_once 'Rumus.php';
class Lingkaran extends LK
{
    public $jari = 2;
    public $phie = 22 / 7;
    public function __counstruct($jari, $phie)
    {
        $this->jari = $jari;
        $this->phie = $phie;
    }
    public function NB()
    {
        $NB = "Lingkaran";
        echo $NB;
    }
    public function RumusLB()
    {
        // Menghitung Luas Lingkaran
        $luas = $this->phie * ($this->jari * $this->jari);
        echo $luas;
    }
    public function RumusKB()
    {
        // Menghitung Keliling Lingkaran
        $keliling = $this->phie * ($this->jari + $this->jari);
        echo $keliling;
    }
    public function keterangan(){
        echo "
            Jari2 : ".$this->jari."
            phie : ".$this->phie."";
    }
}