<?php 
class Mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = 'Mahasiswa';
		// $data['data'] = $this->jurusan->get();
		$this->load->view('admin/mahasiswa/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Mahasiswa';
		$this->load->view('admin/mahasiswa/tambah_mahasiswa', $data);
	}

	// public function proses_tambah()
	// {
	// 	$data = array(
	// 		'id_jurusan' => '0',
	// 		'jurusan' => $_POST['jurusan']
	// 	);
	// 	if ($this->jurusan->proses_tambah_jurusan($data)) {
	// 		$this->session->set_flashdata('status', ['type' => 'success', 'message' => 'Jurusan berhasil ditambah']);
	// 	} else {
	// 		$this->session->set_flashdata('status', ['type' => 'error', 'message' => 'Jurusan gagal ditambah']);
	// 	}
	// 	redirect('jurusan');
	// }
	
}

?>
