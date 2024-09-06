<?php
class Registrasipasien extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_registrasipasien');
		$this->load->model('m_proses');
	}

	public function index()
	{
		if ($this->session->userdata("sess_admin")) {
			$sess_data = $this->session->userdata("sess_admin");
			$data["id"] = $sess_data["id"];
			$data['nama'] = $sess_data["nama"];
			$data['jenisoperasi'] = $this->m_registrasipasien->getJenisOP();
			$data["dokter"] = $this->m_registrasipasien->getDokter();
			$this->load->view("includes/v_header", $data);
			$this->load->view("v_registrasipasien", $data);
			$this->load->view("includes/v_footer");
		} else {
			redirect("login", "refresh");
		}
	}

	function getPasien()
	{
		$instalasi = $this->input->post('instalasi');
		$norm = $this->input->post('norm');
		$data["cek"] = $this->m_registrasipasien->cekPasien($norm)->row();
		$data["pasien"] = $this->m_registrasipasien->getPasien($instalasi, $norm)->row();

		echo json_encode($data);
	}

	function getDiagnosaPasien()
	{
		$norm = $_POST["norm"];
		$data = $this->m_registrasipasien->getDiagnosaPasien($norm)->result();
		echo json_encode($data);
	}

	function getLastNoRegistrasiOperasi()
	{
		$data = $this->m_registrasipasien->getLastNoRegistrasiOperasi()->row();
		echo json_encode($data);
	}

	function insertRegistrasi()
	{
		if ($this->session->userdata("sess_admin")) {
			$noregop = $_POST['noregop'];
			$tglregop = $_POST['tglregop'];
			$norm = $_POST['norm'];
			$noreg = $_POST['noreg'];
			$nodaftar = $_POST['nodaftar'];
			$instalasi = $_POST['instalasi'];
			$dokterpengirim = $_POST['dokterpengirim'];
			$jenisop = $_POST['jenisop'];
			$tglpesan = $_POST['tglpesan'];
			$keterangan = $_POST['keterangan'];
			$sarscovid = $_POST['sarscovid'];
			$diagnosapre = null;
			if (!empty($_POST['diagnosapre'])) {
				foreach ($_POST['diagnosapre'] as $value) {
					$diagnosapre .= ';' . $value;
				}
			}
			$statusop = "1";
			$statusbaca = "0";
			$sess_data = $this->session->userdata("sess_admin");
			$user = $sess_data["id"];
			$createdate = $_POST["today"];
			$notinop = $_POST["notinop"];
			$statuspembayaran = "BELUM LUNAS";
			$dokterop = $_POST["dokterop"];
			$dokterdiagnosapra = $_POST["dokterdiagnosapra"];
			$noanestesi = $_POST["noanestesi"];

			$data["registrasi"] = $this->m_registrasipasien->insertRegistrasi($noregop, $tglregop, $norm, $noreg, $nodaftar, $instalasi, $dokterpengirim, $jenisop, $tglpesan, $keterangan, $statusop, $statusbaca, ";" . $user, ";" . $createdate);
			$data["tindakan"] = $this->m_registrasipasien->insertTindakan($notinop, $noregop, $statuspembayaran, ";" . $dokterop, ";" . $user, ";" . $createdate);
			$data["anestesi"] = $this->m_registrasipasien->insertAnestesi($noanestesi, $noregop, ";" . $user, ";" . $createdate);
			$data["diagnosapra"] = $this->m_registrasipasien->insertDiagnosa($noregop, $diagnosapre, $createdate, $dokterdiagnosapra, $sarscovid, ";" . $user, ";" . $createdate);

			echo json_encode($data);
		} else {
			redirect("login", "refresh");
		}
	}
}
