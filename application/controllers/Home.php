<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
		parent::__construct();		
		$this->load->model('model_profile');
		$this->load->helper('url','array');
		if (!$this->session->userdata('username'))
		{
			redirect('login/index');
		}
 
	}
	public function index()
	{	$data['title']="dashboard";
		$data['info'] = $this->model_profile->ambil_data();
		$columns = array_column($data['info'], 'total');
		array_multisort($columns, SORT_DESC, $data['info']);
		$this->load->view('header',$data);
		$this->load->view('dashboard',$data);
	}
	public function tambah()
	{
		$data['title']="tambah";
		$this->load->view('header',$data);
		$this->load->view('tambah');
	}
		public function add()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$ipk_murni = $this->input->post('ipk_murni');
		$nilai_matkul = $this->input->post('nilai_matkul');
		$sertifikat = $this->input->post('sertifikat');
		$pengalaman = $this->input->post('pengalaman');
		$tes = $this->input->post('tes');
		$suara = $this->input->post('suara');
		$materi = $this->input->post('materi');
		$penyampaian = $this->input->post('penyampaian');
		$sikap = $this->input->post('sikap');
		$interaksi = $this->input->post('interaksi');
		$karakter = $this->input->post('karakter');
		$konsistensi = $this->input->post('konsistensi');
		$komitmen = $this->input->post('komitmen');
		if ($ipk_murni>=3.51 && $ipk_murni<=4.00) {
	$ipk=5;
}
elseif($ipk_murni>=3.01 && $ipk_murni<=3.50) {
	$ipk=4;
}
elseif($ipk_murni>=2.51 && $ipk_murni<=3.00) {
	$ipk=3;
}
elseif($ipk_murni>=1.01 && $ipk_murni<=2.50) {
	$ipk=2;
}
else {
	$ipk=1;
}
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'ipk_murni' => $ipk_murni,
			'ipk' => $ipk,
			'nilai_matkul' => $nilai_matkul,
			'sertifikat' => $sertifikat,
			'pengalaman' => $pengalaman,
			'tes' => $tes,
			'suara' => $suara,
			'materi' => $materi,
			'penyampaian' => $penyampaian,
			'sikap' => $sikap,
			'interaksi' => $interaksi,
			'karakter' => $karakter,
			'komitmen' => $komitmen,
			'konsistensi' => $konsistensi
			);
			$this->model_profile->tambah_data($data);
			redirect('home/index');
		
	}
	public function analisis()
	{
		$data['title']="analisis";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('analisis',$data);
	}
	public function administrasi()
	{
		$data['title']="administrasi";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('administrasi', $data);
	}
	public function tes()
	{
		$data['title']="tes";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('tes', $data);
	}
		public function microteaching()
	{
		$data['title']="microteaching";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('microteaching', $data);
	}
		public function wawancara()
	{
		$data['title']="wawancara";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('wawancara', $data);
	}
	public function daftar()
	{
		$data['title']="daftar";
		$data['info'] = $this->model_profile->ambil_data();
		$this->load->view('header',$data);
		$this->load->view('daftar', $data);
	}
		public function hasil()
	{
		$data['title']="hasil";
		$data['info'] = $this->model_profile->ambil_data();
		$columns = array_column($data['info'], 'total');
		array_multisort($columns, SORT_DESC, $data['info']);
		$this->load->view('header',$data);
		$this->load->view('hasil', $data);
	}
	public function detail($nim)
	{
		$data['title']="daftar";
		$data['info'] = $this->model_profile->lihat_data($nim);
		$this->load->view('header',$data);
		$this->load->view('detail', $data);
	}
	public function hapus($nim)
	{
		$data['info'] = $this->model_profile->hapus_data($nim);
		redirect('home/daftar');
	}
		public function update($nim)
	{
		
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$ipk_murni = $this->input->post('ipk_murni');
		$nilai_matkul = $this->input->post('nilai_matkul');
		$sertifikat = $this->input->post('sertifikat');
		$pengalaman = $this->input->post('pengalaman');
		$tes = $this->input->post('tes');
		$suara = $this->input->post('suara');
		$materi = $this->input->post('materi');
		$penyampaian = $this->input->post('penyampaian');
		$sikap = $this->input->post('sikap');
		$interaksi = $this->input->post('interaksi');
		$karakter = $this->input->post('karakter');
		$konsistensi = $this->input->post('konsistensi');
		$komitmen = $this->input->post('komitmen');
		if ($ipk_murni>=3.51 && $ipk_murni<=4.00) {
	$ipk=5;
}
elseif($ipk_murni>=3.01 && $ipk_murni<=3.50) {
	$ipk=4;
}
elseif($ipk_murni>=2.51 && $ipk_murni<=3.00) {
	$ipk=3;
}
elseif($ipk_murni>=1.01 && $ipk_murni<=2.50) {
	$ipk=2;
}
else {
	$ipk=1;
}
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'ipk_murni' => $ipk_murni,
			'ipk' => $ipk,
			'nilai_matkul' => $nilai_matkul,
			'sertifikat' => $sertifikat,
			'pengalaman' => $pengalaman,
			'tes' => $tes,
			'suara' => $suara,
			'materi' => $materi,
			'penyampaian' => $penyampaian,
			'sikap' => $sikap,
			'interaksi' => $interaksi,
			'karakter' => $karakter,
			'komitmen' => $komitmen,
			'konsistensi' => $konsistensi
			);
			$this->model_profile->ubah_data($data,$nim);
		redirect('home/daftar');
	}
}
