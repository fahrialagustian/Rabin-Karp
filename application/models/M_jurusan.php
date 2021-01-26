<?php 
class M_jurusan extends CI_Model
{
	public function get($id_jurusan ='')
	{
		if ($id_jurusan=='') {
			return $this->db->get('jurusan')->result();
		} else {
			$this->db->where('id_jurusan',$id_jurusan);
			return $this->db->get('jurusan')->row();
		}
		
	}

	public function proses_tambah_jurusan($data)
	{
		return $this->db->insert('jurusan',$data);
	}

	public function proses_edit_jurusan($id_jurusan,$data)
	{

		$this->db->where('id_jurusan', $id_jurusan);
		return $this->db->update('jurusan', $data);
	}

	public function hapus_jurusan($id_jurusan)
	{
		$this->db->where('id_jurusan', $id_jurusan);
		return $this->db->delete('jurusan');
	}
}

?>
