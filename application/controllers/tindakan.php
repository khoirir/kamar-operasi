<?php
class Tindakan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tindakan');
		$this->load->model('m_proses');
	}

	public function index()
	{
		if ($this->session->userdata("sess_admin")) {
			$sess_data = $this->session->userdata("sess_admin");
			$data["id"] = $sess_data["id"];
			$data["nama"] = $sess_data["nama"];
			$data["dokteranestesi"] = $this->m_tindakan->getDokter();
			$data["perawatanestesi"] = $this->m_tindakan->getPerawatAnestesi();
			$data["jenisanestesi"] = $this->m_tindakan->getJenisAnestesi();
			$data["dokteroperator"] = $this->m_tindakan->getDokterOperator();
			$data["perawatop"] = $this->m_tindakan->getPerawatOP();
			$data["perawatinsir"] = $this->m_tindakan->getPerawatInsSir();
			$data["kamarop"] = $this->m_tindakan->getKamarOP();
			$data["jenisimplanop"] = $this->m_tindakan->getJenisImplanOP();
			$data["kelastindakanop"] = $this->m_tindakan->getKelasTindakanOP();
			$data["kelastindakanrr"] = $this->m_tindakan->getKelasTindakanRR();
			$data["dokter"] = $this->m_tindakan->getDokter();
			$data["radiografer"] = $this->m_tindakan->getRadiografer();
			$data["obat"] = $this->m_tindakan->getDataObat();
			$data["kelastindakanlab"] = $this->m_tindakan->getKelasTindakanLab();
			$this->load->view("includes/v_header", $data);
			$this->load->view("v_tindakanpasien");
			$this->load->view("includes/v_footer");
		} else {
			redirect("login", "refresh");
		}
	}

	public function tindakanPasien($noregop)
	{
		if ($this->session->userdata("sess_admin")) {
			$sess_data = $this->session->userdata("sess_admin");
			$data["id"] = $sess_data["id"];
			$data["nama"] = $sess_data["nama"];
			$data["noregop"] = $noregop;
			$data["dokteranestesi"] = $this->m_tindakan->getDokterAnestesi();
			$data["perawatanestesi"] = $this->m_tindakan->getPerawatAnestesi();
			$data["jenisanestesi"] = $this->m_tindakan->getJenisAnestesi();
			$data["dokteroperator"] = $this->m_tindakan->getDokterOperator();
			$data["perawatop"] = $this->m_tindakan->getPerawatOP();
			$data["perawatinsir"] = $this->m_tindakan->getPerawatInsSir();
			$data["kamarop"] = $this->m_tindakan->getKamarOP();
			$data["jenisimplanop"] = $this->m_tindakan->getJenisImplanOP();
			$data["kelastindakanop"] = $this->m_tindakan->getKelasTindakanOP();
			$data["kelastindakanrr"] = $this->m_tindakan->getKelasTindakanRR();
			$data["dokter"] = $this->m_tindakan->getDokter();
			$data["radiografer"] = $this->m_tindakan->getRadiografer();
			$data["obat"] = $this->m_tindakan->getDataObat();
			$data["kelastindakanlab"] = $this->m_tindakan->getKelasTindakanLab();
			$this->load->view("includes/v_header", $data);
			$this->load->view("v_tindakanpasien");
			$this->load->view("includes/v_footer");
		} else {
			redirect("login", "refresh");
		}
	}

	function getPasienTindakan()
	{
		$noregop = $_POST["noregop"];
		$get_data = $this->m_tindakan->getPasienTindakan($noregop)->row();
		echo json_encode($get_data);
	}

	function getEditTindakanPasien()
	{
		$noregop = $_POST["noregop"];
		$get_data = $this->m_tindakan->getEditPasienTindakan($noregop)->row();
		echo json_encode($get_data);
	}

	function getTindakanOperasi()
	{
		$noregop = $_POST["noregop"];
		$data = $this->m_tindakan->getTindakanOperasi($noregop)->row();
		echo json_encode($data);
	}

	function getDetailTindakanOperasi()
	{
		$notinop = $_POST["notinop"];
		$data = $this->m_tindakan->getDetailTindakanOperasi($notinop)->result();
		echo json_encode($data);
	}

	function getTindakanAnestesi()
	{
		$noregop = $_POST["noregop"];
		$data = $this->m_tindakan->getTindakanAnestesi($noregop)->row();
		echo json_encode($data);
	}

	function insupTindakanAnestesi()
	{
		$sess_data = $this->session->userdata("sess_admin");
		$idUser = $sess_data["id"];
		date_default_timezone_set("Asia/Jakarta");
		$tgluser = date("Y-m-d H:i:s");
		$data = $_POST["arr_data"];
		$jenis = $data["jenis"];
		if ($jenis == "update") {
			$notindakananestesi = $data["notindakananestesi"];
			$data_update = array(
				"tglTindakan" => $data["tgltindakananestesi"],
				"tindakanAnestesi" => ";" . implode(";", $data["tindakananestesi"]),
				"dokterAnestesi" => ";" . implode(";", $data["dokteranestesi"]),
				"asistenAnestesi" => ";" . implode(";", $data["asistenanestesi"]),
				"jenisAnestesi" => ";" . implode(";", $data["jenisanestesi"]),
				"keterangan" => $data["keterangan"],
				"idUser" => $data["iduser"] . ";" . $idUser,
				"tglUser" => $data["tgluser"] . ";" . $tgluser
			);
			$data_return = $this->m_tindakan->updateTindakanAnestesi($notindakananestesi, $data_update);
		} else if ($jenis == "insert") {
			$data_insert = array(
				"noTindakanAnestesi" => "A" . $data["noregistrasiop"],
				"noRegistrasiOP" => $data["noregistrasiop"],
				"tglTindakan" => $data["tgltindakananestesi"],
				"tindakanAnestesi" => ";" . implode(";", $data["tindakananestesi"]),
				"dokterAnestesi" => ";" . implode(";", $data["dokteranestesi"]),
				"asistenAnestesi" => ";" . implode(";", $data["asistenanestesi"]),
				"jenisAnestesi" => ";" . implode(";", $data["jenisanestesi"]),
				"keterangan" => $data["keterangan"],
				"idUser" => ";" . $idUser,
				"tglUser" => ";" . $tgluser
			);
			$data_return = $this->m_tindakan->insertTindakanAnestesi($data_insert);
		}
		echo json_encode($data_return . " => jenis : " . $jenis);
	}

	function insupTindakanOperasi()
	{
		$sess_data = $this->session->userdata("sess_admin");
		$idUser = $sess_data["id"];
		date_default_timezone_set("Asia/Jakarta");
		$tgluser = date("Y-m-d H:i:s");
		$data = $_POST["arr_data"];
		$jenis = $data["jenis"];
		if ($jenis == "update") {
			$notindakanop = $data["notindakanop"];
			$data_update = array(
				"tglTindakan" => $data["tgltindakanop"],
				"totalTarifTindakan" => $data["totaltarif"],
				"dokterOP" => ";" . implode(";", $data["dokterop"]),
				"asistenOP" => ";" . implode(";", $data["asistenop"]),
				"radiografer" => $data["radiografer"] != null ? ";" . implode(";", $data["radiografer"]) : null,
				"perawatSirkuler" => $data["perawatsirkuler"] != null ? ";" . implode(";", $data["perawatsirkuler"]) : null,
				"perawatInstrument" => $data["perawatinstrument"] != null ? ";" . implode(";", $data["perawatinstrument"]) : null,
				"jamInduksi" => $data["jaminduksi"],
				"jamIncisi" => $data["jamincisi"],
				"pemakaianImplan" => $data["pemakaianimplan"],
				"jenisImplan" => $data["jenisimplan"] != null ? ";" . implode(";", $data["jenisimplan"]) : null,
				"kamarOP" => $data["kamarop"],
				"idUser" => $data["iduser"] . ";" . $idUser,
				"tglUser" => $data["tgluser"] . ";" . $tgluser
			);
			$data_return = $this->m_tindakan->updateTindakanOperasi($notindakanop, $data_update);
			if ($data["tindakanhapus"] != "") {
				$data_detail_hapus = explode(";", $data["tindakanhapus"]);
				$data_return = $this->m_tindakan->hapusDetailTindakanOperasi($data_detail_hapus, ";" . $idUser, ";" . $tgluser);
			}
			if (!empty($data["datatindakanedit"])) {
				foreach ($data["datatindakanedit"] as $value) {
					$data_detail_update = array(
						"operator" => $value['operator'],
						"kdTindakan" => $value['kodetindakan'],
						"tindakan" => $value['tindakan'],
						"jmlTindakan" => $value['jmltindakan'],
						"kdTarif" => $value['kodetarif'],
						"tarif" => $value['tarif'],
						"subTotal" => $value['subtotaltindakan'],
						"idUser" => explode("~", $value['idtgluser'])[0] . ";" . $idUser,
						"tglUser" => explode("~", $value['idtgluser'])[1] . ";" . $tgluser
					);
					$data_return = $this->m_tindakan->updateDetailTindakanOperasi($value["iddetail"], $data_detail_update);
				}
			}
			if (!empty($data["datatindakanbaru"])) {
				foreach ($data["datatindakanbaru"] as $value) {
					$data_detail_baru = array(
						"noTindakanOP" => $notindakanop,
						"operator" => $value['operator'],
						"kdTindakan" => $value['kodetindakan'],
						"tindakan" => $value['tindakan'],
						"jmlTindakan" => $value['jmltindakan'],
						"kdTarif" => $value['kodetarif'],
						"tarif" => $value['tarif'],
						"subTotal" => $value['subtotaltindakan'],
						"jenisTindakan" => $value['jenistindakan'],
						"statusHapus" => "0",
						"idUser" => ";" . $idUser,
						"tglUser" => ";" . $tgluser
					);
					$data_return = $this->m_tindakan->insertDetailTindakanOperasi($data_detail_baru);
				}
			}
		}
		echo json_encode($data_return . " => jenis : " . $jenis);
	}

	function getNoTindakanOP()
	{
		$noregop = $this->input->post('noregop');
		$get_data = $this->m_tindakan->getNoTindakanOP($noregop)->row();
		echo json_encode($get_data);
	}

	function getDetailTindakanPasien()
	{
		$noregop = $this->input->post('noregop');
		$notinop = $this->input->post('notinop');
		$get_data = $this->m_tindakan->getDetailTindakanPasien($noregop, $notinop)->result();
		echo json_encode($get_data);
	}

	function getDiagnosaPasien()
	{
		$noregop = $_POST["noregop"];
		$data["prapost"] = $this->m_tindakan->getDiagnosaPraPost($noregop)->row();
		echo json_encode($data);
	}

	function getDiagnosaICD()
	{
		$norm = $_POST["norm"];
		$data["icd"] = $this->m_tindakan->getDiagnosaPasien($norm)->result();
		echo json_encode($data);
	}

	function getListTindakanOP()
	{
		$kdkelas = $_POST["kdkelas"];
		$data = $this->m_tindakan->getTindakanOP($kdkelas)->result();
		echo json_encode($data);
	}

	function updateTindakan()
	{
		$gettgltindakan = $this->input->post('tgltindakan');
		$tgltindakan = date("Y-m-d H:i:s", strtotime($gettgltindakan));
		$totaltarif = $this->input->post('totaltarif');
		$statustindakan = $this->input->post('statustindakan');
		$dokterop = null;
		if (!empty($_POST['dokterop'])) {
			foreach ($_POST['dokterop'] as $value) {
				$dokterop .= ';' . $value;
			}
		}
		$timop = null;
		if (!empty($_POST['timop'])) {
			foreach ($_POST['timop'] as $value) {
				$timop .= ';' . $value;
			}
		}
		$dokteranestesi = null;
		if (!empty($_POST['dokteranestesi'])) {
			foreach ($_POST['dokteranestesi'] as $value) {
				$dokteranestesi .= ';' . $value;
			}
		}
		$asistenanestesi = null;
		if (!empty($_POST['asistenanestesi'])) {
			foreach ($_POST['asistenanestesi'] as $value) {
				$asistenanestesi .= ';' . $value;
			}
		}
		$perawatinstrument = null;
		if (!empty($_POST['perawatinstrument'])) {
			foreach ($_POST['perawatinstrument'] as $value) {
				$perawatinstrument .= ';' . $value;
			}
		}
		$perawatsirkuler = null;
		if (!empty($_POST['perawatsirkuler'])) {
			foreach ($_POST['perawatsirkuler'] as $value) {
				$perawatsirkuler .= ';' . $value;
			}
		}
		$radiografer = null;
		if (!empty($_POST['radiografer'])) {
			foreach ($_POST['radiografer'] as $value) {
				$radiografer .= ';' . $value;
			}
		}
		$jenisanestesi = null;
		if (!empty($_POST['jenisanestesi'])) {
			foreach ($_POST['jenisanestesi'] as $value) {
				$jenisanestesi .= ';' . $value;
			}
		}
		$sess_data = $this->session->userdata("sess_admin");
		$user["id"] = $sess_data["id"];
		$notinop = $this->input->post('notinop');
		$noregop = $this->input->post('noregop');
		$kdtindakan = $this->input->post('kdtindakan');
		$kdtarif = $this->input->post('kdtarif');
		$jenistindakan = strtolower($this->input->post('jenistindakan'));
		$get_data['detail_pasien'] = $this->m_tindakan->updateTindakan($tgltindakan, $totaltarif, $statustindakan, $dokterop, $timop, $dokteranestesi, $asistenanestesi, $perawatinstrument, $perawatsirkuler, $radiografer, $jenisanestesi, $user, $notinop, $noregop);
		$get_data['detail_tindakan_hapus'] = '';
		if ((!empty($kdtindakan)) && (!empty($kdtarif)) && (!empty($jenistindakan))) {
			$get_data['detail_tindakan_hapus'] = $this->m_tindakan->hapusTindakan("'" . $notinop . "'", $kdtindakan, $kdtarif, strtolower($jenistindakan));
		}
		$get_data['detail_tindakan_insert'] = '';
		if (!empty($_POST['datatablevalue'])) {
			foreach ($_POST['datatablevalue'] as $value) {
				$get_data['detail_tindakan_insert'] = $this->m_tindakan->insertTindakan($notinop, $value['operator'], $value['kodetindakan'], $value['tindakan'], $value['jmltindakan'], $value['kodetarif'], $value['tarif'], $value['subtotaltindakan'], strtolower($value['jenistindakan']), '0');
			}
		}
		$get_data['detail_tindakan_edit'] = '';
		if (!empty($_POST['editdatatablevalue'])) {
			foreach ($_POST['editdatatablevalue'] as $value) {
				$get_data['detail_tindakan_edit'] = $this->m_tindakan->updateDetailTindakan($value['operator'], $value['tindakan'], $value['jmltindakan'], $value['tarif'], $value['subtotaltindakan'], $notinop, $value['kodetarif'], $value['kodetindakan'], strtolower($value['jenistindakan']));
			}
		}
		echo json_encode($get_data);
	}

	function getListTindakanRR()
	{
		$kdkelas = $_POST["kdkelasrr"];
		$data = $this->m_tindakan->getTindakanRR($kdkelas)->result();
		echo json_encode($data);
	}

	function getPetugasRR()
	{
		$data = $this->m_tindakan->getPetugasRR()->result();
		echo json_encode($data);
	}

	function getTindakanRRPasien()
	{
		$notindakanop = $_POST['notindakanop'];
		$data = $this->m_tindakan->getTindakanRRPasien($notindakanop)->result();
		echo json_encode($data);
	}

	function insupTindakanRR()
	{
		if ($this->session->userdata("sess_admin")) {
			$sess_data = $this->session->userdata("sess_admin");
			$iduser = $sess_data["id"];
			$arr_data = $_POST['arr_data'];
			$notindakanop = $arr_data["notindakanop"];
			$tgltindakanrr = $arr_data["tgltindakanrr"];
			if ($arr_data["datahapus"] != "") {
				$data_detail_hapus = implode("','", explode(";", substr($arr_data["datahapus"], 1)));
				$data_return['deletedetailtindakan'] = $this->m_tindakan->deleteDetailTindakanRR("'" . $data_detail_hapus . "'", $iduser);
			}
			if (isset($arr_data["datadetailtindakan"])) {
				foreach ($arr_data["datadetailtindakan"] as $v) {
					$iddetail = $v['iddetail'];
					$petugas = ";" . implode(";", $v['petugas']);
					$tindakan = $v['tindakan'];
					$jmltindakan = $v['jmltindakan'];
					$tarif = $v['tarif'];
					$subtotaltindakan = $v['subtotaltindakan'];
					$kodetarif = $v['kodetarif'];
					$kodetindakan = $v['kodetindakan'];
					$dataedit = $v['dataedit'];

					if ($dataedit == 'Y' && $iddetail != '') {
						$data_return['updatedetailtindakan'] = $this->m_tindakan->updateDetailTindakanRR($tgltindakanrr, $petugas, $jmltindakan, $subtotaltindakan, $iduser, $iddetail);
					} else if ($dataedit == 'T' && $iddetail == '') {
						$data_return['insertdetailtindakan'] = $this->m_tindakan->insertDetailTindakanRR($notindakanop, $tgltindakanrr, $petugas, $kodetindakan, $tindakan, $jmltindakan, $kodetarif, $tarif, $subtotaltindakan, $iduser);
					}
				}
			}
			echo json_encode($data_return);
		} else {
			redirect("login", "refresh");
		}
	}

	function updateDiagnosaPrapost()
	{
		$sess_data = $this->session->userdata("sess_admin");
		$idUser = $sess_data["id"];
		date_default_timezone_set("Asia/Jakarta");
		$tgluser = date("Y-m-d H:i:s");
		$data = $_POST["arr_data"];
		$iddiagnosa = $data["iddiagnosa"];
		$data_update = array(
			"diagnosaPra" => ";" . implode(";", $data["diagnosapra"]),
			"diagnosaPost" => ";" . implode(";", $data["diagnosapost"]),
			"tglDiagnosaPost" => $tgluser,
			"dokterDiagnosaPra" => $data["dokterdiagnosapra"],
			"dokterDiagnosaPost" => $data["dokterdiagnosapost"],
			"sarsCovid" => $data["sarscovid"],
			"idUser" => $data["iduser"] . ";" . $idUser,
			"tglUser" => $data["tgluser"] . ";" . $tgluser
		);
		$data_return = $this->m_tindakan->updateDiagnosaPrapost($iddiagnosa, $data_update);
		echo json_encode($data_return);
	}

	function getNoResepLast()
	{
		$data = $this->m_tindakan->getNoResepLast()->row();
		echo json_encode($data);
	}

	function insertResep()
	{
		$sess_data = $this->session->userdata("sess_admin");
		$idUser = $sess_data["id"];
		$data_insert = array(
			"noResep" => $_POST["noresep"],
			"noDaftarRawatInap" => $_POST["nodaftar"],
			"noRekamedis" => $_POST["norm"],
			"kdDepoObat" => "DP05",
			"kdTenagaMedis" => $_POST["dokter"],
			"tglResep" => $_POST["tglresep"],
			"statusResep" => "0",
			"createID" => $idUser,
			"createDate" => $_POST["tglresep"]
		);
		$data["resep"] = $this->m_tindakan->insertResep($data_insert);
		if (!empty($_POST['datatablevalue'])) {
			$no = 1;
			foreach ($_POST['datatablevalue'] as $value) {
				$data_insertdetailobat = array(
					"noDetailResepRanap" => "DTR" . substr($_POST["noresep"], 5, 12) . "-" . $no,
					"noResep" => $_POST["noresep"],
					"kdObat" => $value["plu"],
					"nmObat" => $value["obat"],
					"jumlahPakai" => $value["jumlah"],
					"aturanPakai" => $value["aturanpakai"],
					"satuanJual" => $value["satuan"],
					"hargaJual" => $value["harga"],
					"totalHargaJual" => $value["subtotal"],
					"keterangan" => $value["keterangan"],
					"statusRacikan" => "0"
				);
				$data["detailresep"] = $this->m_tindakan->insertDetailResep($data_insertdetailobat);
				$no++;
			}
		}

		echo json_encode($data);
	}

	function getRiwayatResep()
	{
		$norm = $_POST["norm"];
		$tglawal = $_POST['tglawal'] . ' 00:00:00';
		$tglakhir = $_POST['tglakhir'] . ' 23:59:59';
		$data = $this->m_tindakan->getRiwayatResepTerlayani($norm, $tglawal, $tglakhir)->result();

		echo json_encode($data);
	}

	function getDetailRiwayatObat()
	{
		$notransaksi = $_POST["notransaksi"];
		$instalasi = substr($notransaksi, 0, 4);
		$data = $this->m_tindakan->getDetailRiwayatResepTerlayani($notransaksi, $instalasi)->result();
		echo json_encode($data);
	}

	function getListTindakanLab()
	{
		$kdkelas = $_POST["kdkelaslab"];
		$data = $this->m_tindakan->getTindakanLab($kdkelas)->result();
		echo json_encode($data);
	}

	function getLastNoLab()
	{
		$instalasi = $_POST['getkodenomor'];
		$data["noreg"] = $this->m_tindakan->getLastNoRegLab($instalasi)->row();
		$data["notin"] = $this->m_tindakan->getLastNoTinLab($instalasi)->row();
		echo json_encode($data);
	}

	function insertPermintaanLab()
	{
		$instalasi = strtolower($_POST['getkodenomor']);
		if ($instalasi == "ri") {
			$data_insert = array(
				"noRegistrasiPenunjangRanap" => $_POST["noregistrasilab"],
				"noDaftar" => $_POST["nodaftar"],
				"kdUnitAsal" => "3003",
				"unitAsal" => "OK IBS",
				"kdUnit" => "3002",
				"unit" => "Laboratorium",
				"tglMasukPenunjangRanap" => $_POST["tglmasuklab"],
				"statusPenunjang" => "PERMINTAAN",
				"kdTenagaMedisPengirim" => $_POST["dokterlab"],
				"ketKlinis" => $_POST["ketklinis"]
			);
			$data["registrasiranap"] = $this->m_tindakan->insertRegistrasiLabRanap($data_insert);
			$data_inserttindakan = array(
				"noTindakanPenunjangRanap" => $_POST["notinlab"],
				"noRegistrasiPenunjangRanap" => $_POST["noregistrasilab"],
				"totalTindakanPenunjangRanap" => $_POST["totaltindakan"],
				"statusPembayaran" => "BELUM LUNAS"
			);
			$data["tindakanlabranap"] = $this->m_tindakan->insertTindakanLabRanap($data_inserttindakan);
			if (!empty($_POST['datatablevalue'])) {
				foreach ($_POST['datatablevalue'] as $value) {
					$data_insertdetailtindakan = array(
						"noTindakanPenunjangRanap" => $_POST["notinlab"],
						"kdTarif" => $value["kodetarif"],
						"tindakan" => $value["tindakan"],
						"tarif" => $value["tarif"],
						"jumlahTindakan" => $value["jmltindakan"],
						"totalTarif" => $value["subtotaltindakan"],
						"statusTindakan" => "PERMINTAAN"
					);
					$data["tindakanlabranap"] = $this->m_tindakan->insertDetailTindakanLabRanap($data_insertdetailtindakan);
				}
			}
		} else {
			$data_insert = array(
				"noRegistrasiPenunjangRajal" => $_POST["noregistrasilab"],
				"noDaftar" => $_POST["nodaftar"],
				"kdUnitAsal" => "3003",
				"unitAsal" => "OK IBS",
				"kdUnit" => "3002",
				"unit" => "Laboratorium",
				"tglMasukPenunjangRajal" => $_POST["tglmasuklab"],
				"statusPenunjang" => "PERMINTAAN",
				"kdTenagaMedisPengirim" => $_POST["dokterlab"],
				"ketKlinis" => $_POST["ketklinis"]
			);
			$data["registrasirajal"] = $this->m_tindakan->insertRegistrasiLabRajal($data_insert);
			$data_inserttindakan = array(
				"noTindakanPenunjangRajal" => $_POST["notinlab"],
				"noRegistrasiPenunjangRajal" => $_POST["noregistrasilab"],
				"totalTindakanPenunjangRajal" => $_POST["totaltindakan"],
				"statusPembayaran" => "BELUM LUNAS"
			);
			$data["tindakanlabrajal"] = $this->m_tindakan->insertTindakanLabRajal($data_inserttindakan);
			if (!empty($_POST['datatablevalue'])) {
				foreach ($_POST['datatablevalue'] as $value) {
					$data_insertdetailtindakan = array(
						"noTindakanPenunjangRajal" => $_POST["notinlab"],
						"kdTarif" => $value["kodetarif"],
						"tindakan" => $value["tindakan"],
						"tarif" => $value["tarif"],
						"jumlahTindakan" => $value["jmltindakan"],
						"totalTarif" => $value["subtotaltindakan"],
						"statusTindakan" => "PERMINTAAN"
					);
					$data["tindakanlabrajal"] = $this->m_tindakan->insertDetailTindakanLabRajal($data_insertdetailtindakan);
				}
			}
		}
		echo json_encode($data);
	}

	function getRiwayatLab()
	{
		$norm = $_POST["norm"];
		$tglawal = $_POST["tglawal"] . ' 00:00:00';;
		$tglakhir = $_POST["tglakhir"] . ' 23:59:59';;
		$data = $this->m_tindakan->getRiwayatLab($norm, $tglawal, $tglakhir)->result();
		echo json_encode($data);
	}

	function getDetailRiwayatLab()
	{
		$kodeinstalasi = substr($_POST["noreg"], 0, 2);
		$notindakan = $_POST["notin"];
		$data = $this->m_tindakan->getDetailRiwayatLab($kodeinstalasi, $notindakan)->result();
		echo json_encode($data);
	}

	function konfirmasiSelesaiTindakan()
	{
		$sess_data = $this->session->userdata("sess_admin");
		$iduser = $sess_data["id"];
		date_default_timezone_set("Asia/Jakarta");
		$tgluser = date("Y-m-d H:i:s");
		$noregop = $_POST["noregop"];
		$statusop = $_POST["statusop"];

		$data_return = $this->m_tindakan->konfirmasiSelesaiTindakan($noregop, $statusop, $iduser, $tgluser);
		echo json_encode($data_return);
	}
}
