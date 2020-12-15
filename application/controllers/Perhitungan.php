<?php
class Perhitungan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_hitung', 'hitung');
    }

    public function index()
    {
        $data['title'] = 'Input Judul Tugas Akhir';
        $this->load->view('admin/perhitungan/index', $data);
    }

    public function proses_hitung()
    {
        $kalimat = $_POST['judul'];

        // Tahap Text Preprocessing

        // 1. Tahap Case Folding
        $case_folding = strtolower($kalimat);


        // 2. Tahap Tokenizing
        // echo $kalimat_karakter_huruf = preg_replace("/[^a-zA-Z]/", " ", $case_folding);

        $hasil_explode = explode(' ', $kalimat);

        // echo "<pre>";
        // print_r($hasil_explode);
        // echo "</pre>";
        $i = 0;
        $perkata = array();
        foreach ($hasil_explode as $key => $value) {
            array_push($perkata, ["kata" => strtolower(preg_replace("/[^a-zA-Z]/", "", $value))]);
        }

        // echo "<pre>";
        // print_r($perkata);
        // echo "</pre>";


        // 3. Proses Filter
        $kalimat_sudah_di_filter = "";
        foreach ($perkata as $key) {
            $cek = $this->hitung->cek_stopword($key['kata'])->num_rows();
            if ($cek == 0) {
                $kalimat_sudah_di_filter .= $key['kata'] . " ";
                // array_push($kata_filter,['kata_filter'=>$key['kata']]);
            }
        }
        $kalimat_sudah_di_filter;
        // echo "<pre>";
        // print_r($kata_filter);
        // echo "</pre>";

        // K-Gram

        $kalimat_prepocessing = str_replace(" ", "", $kalimat_sudah_di_filter);

        $k_gram = 4;
        $pkata = array();
        $jum_karakter = strlen($kalimat_prepocessing);
        for ($i = 0; $i < $jum_karakter; $i++) {
            $kata = substr($kalimat_prepocessing, $i, $k_gram);
            array_push($pkata, ['kata' => $kata]);
        }

        // echo "<pre>";
        // print_r($pkata);
        // echo "</pre>";
        $kata_hash1 = array();
        foreach ($pkata as $dt) {
            $n = 1;
            $h = 0;
            $jum_kar = strlen($dt['kata']);
            for ($i = 0; $i < $jum_kar; $i++) {
                $huruf = substr($dt['kata'], $i, 1);
                $sql = $this->hitung->ambil_nilai_ascii($huruf)->row();
                $nilai = $sql->nilai;
                $hash = pow(($nilai * 11), $n - 1);
                $h += $hash;
                $n++;
            }

            $mod = $h % 10007;
            array_push($kata_hash1, ['kata' => $dt['kata'], "hash" => $mod]);
        }

        // echo "<pre>";
        // print_r($kata_hash1);
        // echo "</pre>";

        $data_judul = $this->hitung->ambil_data_judul()->result();
        // echo "<pre>";
        // print_r($data_judul);
        // echo "</pre>";

        foreach ($data_judul as $data) {
            $kalimat = $data->judul;

            // Tahap Text Preprocessing

            // 1. Tahap Case Folding
            $case_folding = strtolower($kalimat);


            // 2. Tahap Tokenizing
            // echo $kalimat_karakter_huruf = preg_replace("/[^a-zA-Z]/", " ", $case_folding);

            $hasil_explode = explode(' ', $kalimat);

            // echo "<pre>";
            // print_r($hasil_explode);
            // echo "</pre>";
            $i = 0;
            $perkata = array();
            foreach ($hasil_explode as $key => $value) {
                array_push($perkata, ["kata" => strtolower(preg_replace("/[^a-zA-Z]/", "", $value))]);
            }

            // echo "<pre>";
            // print_r($perkata);
            // echo "</pre>";


            // 3. Proses Filter
            $kalimat_sudah_di_filter = "";
            foreach ($perkata as $key) {
                $cek = $this->hitung->cek_stopword($key['kata'])->num_rows();
                if ($cek == 0) {
                    $kalimat_sudah_di_filter .= $key['kata'] . " ";
                    // array_push($kata_filter,['kata_filter'=>$key['kata']]);
                }
            }
            $kalimat_sudah_di_filter;
            // echo "<pre>";
            // print_r($kata_filter);
            // echo "</pre>";

            // K-Gram

            $kalimat_prepocessing = str_replace(" ", "", $kalimat_sudah_di_filter);

            $k_gram = 4;
            $pkata = array();
            $jum_karakter = strlen($kalimat_prepocessing);
            for ($i = 0; $i < $jum_karakter; $i++) {
                $kata = substr($kalimat_prepocessing, $i, $k_gram);
                array_push($pkata, ['kata' => $kata]);
            }

            // echo "<pre>";
            // print_r($pkata);
            // echo "</pre>";
            $kata_hash = array();
            $jum_kata_sama =0;
            $kata_sama = array();
            foreach ($pkata as $dt) {
                $n = 1;
                $h = 0;
                $jum_kar = strlen($dt['kata']);
                for ($i = 0; $i < $jum_kar; $i++) {
                    $huruf = substr($dt['kata'], $i, 1);
                    $sql = $this->hitung->ambil_nilai_ascii($huruf)->row();
                    $nilai = $sql->nilai;
                    $hash = pow(($nilai * 11), $n - 1);
                    $h += $hash;
                    $n++;
                }

                $mod = $h % 10007;
                array_push($kata_hash, ['kata' => $dt['kata'], "hash" => $mod]);
            }

            

            echo "<pre>";
        print_r($kata_hash);
        echo "</pre>";
        echo "<pre>";
        print_r($kata_hash1);
        echo "</pre>";
        }
    }
}
