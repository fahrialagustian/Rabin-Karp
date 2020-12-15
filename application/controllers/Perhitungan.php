<?php 
class Perhitungan extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $data['title'] ='Input Judul Tugas Akhir';
        $this->load->view('admin/perhitungan/index',$data);
    }

    public function proses_hitung()
    {
        $kalimat = $_POST['judul'];

        // Tahap Text Preprocessing

        // 1. Tahap Case Folding
        echo $case_folding = strtolower($kalimat);
        echo "<br>";

        // 2. Tahap Tokenizing
        // echo $kalimat_karakter_huruf = preg_replace("/[^a-zA-Z]/", " ", $case_folding);

        $hasil_explode = explode(' ',$kalimat);

        echo "<pre>";
        print_r($hasil_explode);
        echo "</pre>";
        $i=0;
        foreach ($hasil_explode as $key => $value) {
            echo $value;
            $i++;
        }


        

    }
}

?>