<?php
class contoh2 extends CI_Controller
{
    public function index()
    {
        echo "Hai, selamat menikmati pembelajaran ini!";
        //this->load->view('view-contoh2');
    }

    public function penjumlahan($x, $y)
    {
        $this->load->model('contoh2');
        $data['x'] = $x;
        $data['y'] = $y;
        $data['Hasil'] = $this->model_latihan1->jumlah($x, $y);
        $this->load->view('view-contoh2', $data);
    }
}