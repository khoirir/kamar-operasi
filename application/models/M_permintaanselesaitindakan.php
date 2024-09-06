<?php
class M_permintaanselesaitindakan extends CI_Model{
	function dataPermintaanSelesai($search, $limit, $start, $order_field, $order_ascdesc){
        // $where="norm LIKE '%$search%' OR namapasien LIKE '%$search%' OR dokterop LIKE '%$search%' OR unitasal LIKE '%$search%' OR tglpermintaanop2 LIKE '%$search%' OR jenisop LIKE '%$search%' OR noregistrasiop LIKE '%$search%' OR tgljadwalop2 LIKE '%$search%'";
        // $this->db->where($where);
        // $this->db->order_by($order_field, $order_ascdesc);
        // $this->db->limit($limit, $start);
        // return $this->db->get('vw_permintaanoperasiselesaitindakan')->result_array();
        $this->db->select("'' AS nomor,noregop,norm,pasien,dokterop,instalasi,unit, jenisop,tglkonfirmasiop,warnajenisop,tglkonfirmasiop2");
        $where="statusop='4' AND (norm LIKE '%$search%' OR pasien LIKE '%$search%' OR dokterop LIKE '%$search%' OR instalasi LIKE '%$search%' OR unit LIKE '%$search%' OR tglkonfirmasiop2 LIKE '%$search%' OR jenisop LIKE '%$search%' OR noregop LIKE '%$search%')";
        $this->db->where($where);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        return $this->db->get('vw_listoperasi')->result_array();
    }

    function countAll(){
        // return $this->db->get('vw_permintaanoperasiselesaitindakan')->num_rows();
        $this->db->where("statusop='4'");
        return $this->db->get('vw_listoperasi')->num_rows();
    }
    
    function countFilter($search){
        $where="statusop='4' AND (norm LIKE '%$search%' OR pasien LIKE '%$search%' OR dokterop LIKE '%$search%' OR instalasi LIKE '%$search%' OR unit LIKE '%$search%' OR tglpermintaanop2 LIKE '%$search%' OR tglkonfirmasiop2 LIKE '%$search%' OR jenisop LIKE '%$search%' OR noregop LIKE '%$search%')";
        $this->db->where($where);
        return $this->db->get('vw_listoperasi')->num_rows();
    }

  //   function getDetailPasien($noregop){
		// $hsl=$this->db->query("SELECT * FROM vw_detailpasienoperasi WHERE noregistrasiop=?",array($noregop));
		// return $hsl;
  //   }

    function getDetailPasien($norm){
        $this->db->select("noRekamedis AS norm,nmPasien AS namapasien,tempatLahir AS tmplahir,DATE_FORMAT(tglLahir,'%d-%m-%Y') AS tgllahir,jenisKelamin AS jk,alamat AS alamat,kelurahan AS kelurahan, kecamatan AS kecamatan, kabupaten AS kabupaten,provinsi AS provinsi");
        return $this->db->get_where("t_pasien",array("noRekamedis"=>$norm));
    }

    function getDetailAsalPasien($noregistrasi){
        if(strtolower(substr($noregistrasi,0,2))=='ri'){
            $select="trg.noDaftar AS nodaftar,DATE_FORMAT(trg.tglDaftar,'%d-%m-%Y %H:%i:%s') AS tgldaftar,trorn.noDaftarRawatInap AS noregistrasi,DATE_FORMAT(trorn.tglMasukRawatInap,'%d-%m-%Y %H:%i:%s') AS tglregistrasi,UPPER(trorn.rawatInap) AS unitasal,IF(trorn.kelas IS NULL,'',trorn.kelas) AS kelas,tcb.carabayar AS carabayar,tpj.penjamin AS penjamin";
            $this->db->select($select);
            $this->db->from('t_registrasirawatinap trorn');
            $this->db->join('t_registrasi trg', 'trorn.noDaftar = trg.noDaftar');
            $this->db->join('t_carabayar tcb', 'tcb.kdCaraBayar = trg.kdCaraBayar');
            $this->db->join('t_penjamin tpj', 'tpj.kdPenjamin = trg.kdPenjamin');
            $where = array('trorn.noDaftarRawatInap' => $noregistrasi);
            $this->db->where($where);
            $sql=$this->db->get();
        }else{
            $select="trg.noDaftar AS nodaftar,DATE_FORMAT(trg.tglDaftar,'%d-%m-%Y %H:%i:%s') AS tgldaftar,trorj.noRegistrasiRawatJalan AS noregistrasi,DATE_FORMAT(trorj.tglMasukRawatJalan,'%d-%m-%Y %H:%i:%s') AS tglregistrasi,UPPER(tun.unit) AS unitasal,'' AS kelas,tcb.carabayar AS carabayar,tpj.penjamin AS penjamin";
            $this->db->select($select);
            $this->db->from('t_registrasirawatjalan trorj');
            $this->db->join('t_unit tun', 'trorj.kdUnit = tun.kdUnit');
            $this->db->join('t_registrasi trg', 'trorj.noDaftar = trg.noDaftar');
            $this->db->join('t_carabayar tcb', 'tcb.kdCaraBayar = trg.kdCaraBayar');
            $this->db->join('t_penjamin tpj', 'tpj.kdPenjamin = trg.kdPenjamin');
            $where = array('trorj.noRegistrasiRawatJalan' => $noregistrasi);
            $this->db->where($where);
            $sql=$this->db->get();
        }
        return $sql;
    }

    function getDetailPemesananOperasi($noregop){
        $select="tro.noRM AS norm,tro.noRegistrasiPasien AS noregistrasi,tjop.jenisOperasi AS jenisop,tjop.keterangan AS warnajenisop,tro.keterangan AS keterangan,tro.noRegistrasiOP AS noregistrasiop,DATE_FORMAT( tro.tglRegistrasiOP, '%d-%m-%Y %H:%i:%s') AS tglregistrasiop,tro.dokterPengirim AS dokterpengirim,DATE_FORMAT( tro.tglPermintaanOP, '%d-%m-%Y %H:%i:%s') AS tglpermintaanop,DATE_FORMAT(tro.tglKonfirmasiJadwalOP,'%d-%m-%Y %H:%i:%s') AS tgljadwalop,tro.instalasi AS instalasi";
        $this->db->select($select);
        $this->db->from('t_registrasiop tro');
        $this->db->join('t_jenisop tjop', 'tro.jenisOperasi = tjop.kdJenisOperasi');
        $where = array('tro.noRegistrasiOP' => $noregop);
        $this->db->where($where);
        $sql=$this->db->get();

        return $sql;
    }

    function getDiagnosaPraPost($noregistrasiop){
        $this->db->select('idDiagnosaOP AS iddiagnosa,diagnosaPra AS diagnosapra, diagnosaPost AS diagnosapost, dokterDiagnosaPra AS dokterdiagnosapra,dokterDiagnosaPost AS dokterdiagnosapost,sarsCovid AS sarscovid,idUser AS iduser,tglUser AS tgluser');
        return $this->db->get_where("t_diagnosapasienop",array('noRegistrasiOP' => $noregistrasiop));
    }

    function getDiagnosaPasien($norm){
        return $this->db->query("SELECT tgldiagnosa,tgldaftar,kdicd10,icd10,deskripsi,jenisdiagnosa,dokter FROM vw_diagnosapasien WHERE norm=? ORDER BY jenisdiagnosa DESC, IF(tgldiagnosa IS NULL,tgldaftar,tgldiagnosa) ASC",array($norm));
    }

    function getTindakanAnestesi($noregistrasiop){
        $this->db->select("noTindakanAnestesi AS notindakananestesi,DATE_FORMAT(tglTindakan,'%d-%m-%Y %H:%i:%s') AS tgltindakananestesi,tindakanAnestesi AS tindakananestesi,dokterAnestesi AS dokteranestesi,asistenAnestesi AS asistenanestesi,jenisAnestesi AS jenisanestesi,keterangan AS keterangan,idUser AS iduser,tglUser AS tgluser");
        return $this->db->get_where("t_tindakananestesi",array("noRegistrasiOP"=>$noregistrasiop));
    }

    function getTindakanOperasi($noregistrasiop){
        $this->db->select("noTindakanOP AS notindakanop,DATE_FORMAT(tglTindakan,'%d-%m-%Y %H:%i:%s') AS tgltindakanop,totalTarifTindakan AS totaltariftindakan,statusPembayaran AS statuspembayaran,DATE_FORMAT(tglPembayaran,'%d-%m-%Y %H:%i:%s') AS tglpembayaran,dokterOP AS dokterop,asistenOP AS asistenop,radiografer AS radiografer,perawatSirkuler AS perawatsirkuler,perawatInstrument AS perawatinstrument,jamInduksi AS jaminduksi,jamIncisi AS jamincisi,pemakaianImplan AS pemakaianimplan,jenisImplan AS jenisimplan,kamarOP AS kamarop,idUser AS iduser,tglUser AS tgluser");
        return $this->db->get_where("t_tindakanop",array("noRegistrasiOP"=>$noregistrasiop));
    }

    function getDetailTindakanOperasi($notindakanop){
        $select="tdto.idDetailTindakan AS iddetail,tdto.noTindakanOP AS notindakanop,tdto.operator AS operator,tdto.kdTindakan AS kdtindakan,tdto.tindakan AS tindakan,tdto.jmlTindakan AS jmltindakan,UPPER(tdto.jenisTindakan) AS jenistindakan,IF(tk.kelas IS NULL,'-',tk.kelas) AS kelas,tdto.kdTarif AS kdtarif,tdto.tarif AS tarif,tdto.subTotal AS subtotal,tdto.statusHapus AS statushapus,tdto.idUser AS iduser,tglUser AS tgluser";
        $this->db->select($select);
        $this->db->from('t_detailtindakanop tdto');
        $this->db->join('t_tariftindakan2 tt', 'tdto.kdTarif = tt.kdTarif','left');
        $this->db->join('t_kelas tk', 'tk.kdKelas = tt.kdKelas','left');
        $where = array('tdto.noTindakanOP' => $notindakanop,'tdto.statusHapus'=>'0');
        $this->db->where($where);
        $this->db->order_by("tdto.idDetailTindakan","DESC");
        return $this->db->get();
    }

    function getDetailPelaksanaOperasi($notinop){
    	$sql=$this->db->query("SELECT noTindakanOP AS notinop, noRegistrasiOP AS noregop, DATE_FORMAT(tglTindakan,'%d-%m-%Y %H:%i:%s') AS tgltindakan, totalTarifTIndakan AS total, dokterOP AS dokterop, timOP AS asistenop, dokterAnestesi AS dokteranestesi, asistenAnestesi AS asistenanestesi, perawatSirkuler AS perawatsirkuler, perawatInstrument AS perawatinstrument, radiografer, jenisAnestesi AS jenisanestesi,statusPembayaran AS statuspembayaran,tglPembayaran AS tglpembayaran FROM t_tindakanok WHERE noTindakanOP=?",array($notinop));
    	return $sql;
    }

    function getTindakan($notinop){
		$sql=$this->db->query("SELECT * FROM t_detailtindakanok WHERE noTindakanOP=? AND statusHapus='0'",array($notinop));
		return $sql;
	}

    function getStatusBayar($noregistrasiop){
        $this->db->select("noTindakanOP AS notindakanop,statusPembayaran AS statuspembayaran,DATE_FORMAT(tglPembayaran,'%d-%m-%Y %H:%i:%s') AS tglpembayaran");
        return $this->db->get_where("t_tindakanop",array("noRegistrasiOP"=>$noregistrasiop));
    }

    function getTindakanRRPasien($notindakanop)
    {
        $select = "trr.idDetail AS iddetail,trr.tglTindakanRR AS tgltindakan,trr.petugas AS petugas,trr.kdTindakan AS kdtindakan,trr.tindakan AS tindakan,tk.kelas AS kelas,trr.jmlTindakan AS jmltindakan,trr.kdTarif AS kdtarif,trr.tarif AS tarif,trr.subTotal AS subtotal";
        $this->db->select($select);
        $this->db->from('t_tindakanoprr trr');
        $this->db->join('t_tariftindakan2 tt', 'trr.kdTarif = tt.kdTarif', 'left');
        $this->db->join('t_kelas tk', 'tk.kdKelas = tt.kdKelas', 'left');
        $where = array('trr.noTindakanOP' => $notindakanop, 'trr.statusHapus' => '0');
        $this->db->where($where);
        $this->db->order_by("trr.tglTindakanRR", "ASC");
        return $this->db->get();
    }

    function insertHasilOperasi($data){
        return $this->db->insert('t_hasilop',$data);
    }

    function getHasilOperasi($noregop){
        $select="idHasil AS id,noRegistrasiOP AS noregop,hasilOP AS hasilop,idUser AS iduser,tglUser AS tgluser";
        $this->db->select($select);
        $where = array('statusHapus' => '0','noRegistrasiOP'=>$noregop);
        $this->db->where($where);
        $this->db->order_by("idHasil","ASC");
        return $this->db->get("t_hasilop");
    }

    function hapusHasilOperasi($id,$iduser,$tgluser){
        $this->db->set('statusHapus', '1');
        $this->db->set('idUser', $iduser);
        $this->db->set('tglUser', $tgluser);
        $this->db->where_in('idHasil', $id);
        return $this->db->update('t_hasilop');
    }

    function konfirmasiSelesai($noregop,$statusop,$iduser,$tgluser){
        $sql=$this->db->query("UPDATE t_registrasiop SET statusOP=?,idUser=CONCAT(COALESCE(idUser,''),';',?),tglUser=CONCAT(COALESCE(tglUser,''),';',?) WHERE  noRegistrasiOP=?",array($statusop,$iduser,$tgluser,$noregop));
        return $sql;
    }

    function getRuangPerawatan(){
        $sql=$this->db->query("SELECT kdRawatInap AS kode,rawatInap AS rawatinap FROM t_rawatinap ORDER BY rawatInap ASC");
        return $sql;
    }

}
