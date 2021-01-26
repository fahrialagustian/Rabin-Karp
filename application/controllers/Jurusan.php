<?php 
class Jurusan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_jurusan','jurusan');
	}

	public function index()
	{
		$data['title'] = 'Jurusan';
		$data['data'] = $this->jurusan->get();
		$this->load->view('admin/jurusan/index', $data);
	}

	public function tambah_jurusan()
	{
		$data['title'] = 'Jurusan';
		$this->load->view('admin/jurusan/tambah_jurusan', $data);
	}

	public function proses_tambah_jurusan()
	{
		$data = array(
			'id_jurusan' => '0',
			'jurusan' => $_POST['jurusan']
		);
		if ($this->jurusan->proses_tambah_jurusan($data)) {
			$this->session->set_flashdata('status', ['type' => 'success', 'message' => 'Jurusan berhasil ditambah']);
		} else {
			$this->session->set_flashdata('status', ['type' => 'error', 'message' => 'Jurusan gagal ditambah']);
		}
		redirect('jurusan');
	}

	public function edit_jurusan()
	{
		$data['title'] = 'Jurusan';
		$id_jurusan = $_GET['id'];
		$data['data'] = $this->jurusan->get($id_jurusan);
		$this->load->view('admin/jurusan/edit_jurusan', $data);
	}

	public function proses_edit_jurusan()
	{
		$data = array(
			'jurusan' => $_POST['jurusan']
		);
		$id_jurusan = $_POST['id_jurusan'];
		if ($this->jurusan->proses_edit_jurusan($id_jurusan,$data)) {
			$this->session->set_flashdata('status', ['type' => 'success', 'message' => 'Jurusan berhasil diedit']);
		} else {
			$this->session->set_flashdata('status', ['type' => 'error', 'message' => 'Jurusan gagal diedit']);
		}
		redirect('jurusan');
	}

	public function hapus()
	{
		$id_jurusan = $_GET['id'];
		if ($this->jurusan->hapus_jurusan($id_jurusan)) {
			$this->session->set_flashdata('status', ['type' => 'success', 'message' => 'Jurusan berhasil dihapus']);
		} else {
			$this->session->set_flashdata('status', ['type' => 'error', 'message' => 'Jurusan gagal dihapus']);
		}
		redirect('jurusan');
	}
}

?>
