<?php
class model_latihan1 extends CI_Model
{
    public $x, $y, $hasil;
    public function jumlah($x = null, $y = null)
    {
        $this->$x = $x;
        $this->$y = $y;
        $this->hasil = $this->$x + $this->$y;
        return $this->hasil;
    }
}