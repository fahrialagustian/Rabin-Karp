<?php 

class M_hitung extends CI_Model
{
    public function cek_stopword($kata)
    {
        return $this->db->query("SELECT * FROM stopword where kata='$kata'");
    }

    public function ambil_nilai_ascii($karakter)
    {
        return $this->db->query("SELECT * FROM ascii where huruf='$karakter'");
    }

    public function ambil_data_judul()
    {
        return $this->db->query("SELECT * FROM judul order by judul ASC");
    }
}


?>