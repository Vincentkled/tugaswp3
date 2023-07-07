<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Hai, selamat menikmati pembelajaran ini!";
        //this->load->view('view-latihan1');
    }

    public function penjumlahan($x, $y)
    {
        $this->load->model('latihan1');
        $data['x'] = $x;
        $data['y'] = $y;
        $data['hasil'] = $this->model_latihan1->jumlah($x, $y);
        $this->load->view('view-latihan1', $data);
    }
}