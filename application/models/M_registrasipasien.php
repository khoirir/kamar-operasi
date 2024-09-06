<?php
class M_registrasipasien extends CI_Model{
	function cekPasien($norm){
		$sql=$this->db->query("SELECT noRM AS norm,noRegistrasiOP AS noregistrasi,DATE_FORMAT(tglRegistrasiOP,'%d-%m-%Y %H:%i:%s') AS tglregistrasiop,statusOP AS statusop FROM t_registrasiop WHERE noRM = ? ORDER BY tglRegistrasiOP DESC LIMIT 1;",array($norm));
        return $sql;
	}

	function getPasien($instalasi,$norm){
		$query="";
        if($instalasi=="DP01"){
            $query=$this->db->query("SELECT noRegistrasiRawatJalan AS noregistrasi,DATE_FORMAT(tglMasukRawatJalan,'%d-%m-%Y %H:%i:%s') AS tglregistrasi,noDaftar AS nodaftar,DATE_FORMAT(tglDaftar,'%d-%m-%Y %H:%i:%s') AS tgldaftar,noRekamedis AS norm,nmPasien AS pasien,jenisKelamin AS jk,tempatLahir AS tempatlahir,tglLahir AS tgllahir,alamat AS alamat,carabayar AS carabayar,penjamin AS penjamin,unit AS unit,'-' AS nokamar,'-' AS nobed,'-' AS kelas,DATE_FORMAT(tglPulang,'%d-%m-%Y %H:%i:%s') AS tglpulang,DATE_FORMAT(NOW(),'%d-%m-%Y %H:%i:%s') AS tglsekarang FROM vw_pasienrawatjalan WHERE unit NOT IN('IGD') AND noRekamedis = ? AND statusKeluar NOT IN('Batal') ORDER BY tglMasukRawatJalan DESC LIMIT 1",array($norm));
        }else if($instalasi=="DP03"){
            $query=$this->db->query("SELECT noDaftarRawatInap AS noregistrasi,DATE_FORMAT(tglMasukRawatInap,'%d-%m-%Y %H:%i:%s') AS tglregistrasi,noDaftar AS nodaftar,DATE_FORMAT(tglDaftar,'%d-%m-%Y %H:%i:%s') AS tgldaftar,noRekamedis AS norm,nmPasien AS pasien,jenisKelamin AS jk,tglLahir AS tgllahir,tempatlahir AS tempatlahir,alamat AS alamat,carabayar AS carabayar,penjamin AS penjamin,rawatInap AS unit,noKamar AS nokamar,noBed AS nobed,kelas AS kelas,DATE_FORMAT(tglPulang,'%d-%m-%Y %H:%i:%s') AS tglpulang,DATE_FORMAT(NOW(),'%d-%m-%Y %H:%i:%s') AS tglsekarang FROM vw_pasienrawatinap WHERE noRekamedis = ? AND statusKeluar NOT IN('Batal') ORDER BY tglMasukRawatInap DESC LIMIT 1",array($norm));
        }else if($instalasi=="DP09"){
            $query=$this->db->query("SELECT noRegistrasiRawatJalan AS noregistrasi,DATE_FORMAT(tglMasukRawatJalan,'%d-%m-%Y %H:%i:%s') AS tglregistrasi,noDaftar AS nodaftar,DATE_FORMAT(tglDaftar,'%d-%m-%Y %H:%i:%s') AS tgldaftar,noRekamedis AS norm,nmPasien AS pasien,jenisKelamin AS jk,tempatLahir AS tempatlahir,tglLahir AS tgllahir,alamat AS alamat,carabayar AS carabayar,penjamin AS penjamin,unit AS unit,'-' AS nokamar,'-' AS nobed,'-' AS kelas,DATE_FORMAT(tglPulang,'%d-%m-%Y %H:%i:%s') AS tglpulang,DATE_FORMAT(NOW(),'%d-%m-%Y %H:%i:%s') AS tglsekarang FROM vw_pasienrawatjalan WHERE unit IN ('IGD','Haemodialisa') AND noRekamedis = ? AND statusKeluar NOT IN('Batal') ORDER BY tglMasukRawatJalan DESC LIMIT 1",array($norm));
        }
        return $query;
    }

    function getJenisOP(){
        return $this->db->query("SELECT kdJenisOperasi AS kdjenisoperasi,jenisOperasi AS jenisoperasi FROM t_jenisop ORDER BY kdJenisOperasi ASC");
    }

    function getDokter(){
        return $this->db->query("SELECT * FROM t_tenagamedis2 WHERE kdKelompokTenagaMedis='ktm1' ORDER BY namapetugasMedis ASC");
    }

    function getDokterOperator(){
        $this->db->where_in("kdPetugasMedis",array("0009","0007","0015","0024","0041","0010","0038","0011","0054","0030","0033","0019","0074","0056","0052"));
        $this->db->order_by("namapetugasMedis","ASC");
        return $this->db->get("t_tenagamedis2");
    }

    function getICD10($search){
    	return $this->db->query("SELECT * FROM t_icd10 WHERE kdIcd10 LIKE '%$search%' OR icd10 LIKE '%$search%' OR keterangan LIKE '%$search%'");
    }

    function getDiagnosaPasien($norm){
    	return $this->db->query("SELECT tgldiagnosa,tgldaftar,kdicd10,icd10,deskripsi,jenisdiagnosa,dokter FROM vw_diagnosapasien WHERE norm=? ORDER BY jenisdiagnosa DESC, IF(tgldiagnosa IS NULL,tgldaftar,tgldiagnosa) ASC",array($norm));
    }

    function getLastNoRegistrasiOperasi(){
        $query=$this->db->query("SELECT noRegistrasiOP AS noregop,SUBSTR(noRegistrasiOP,3,6) as getdatesql FROM t_registrasiop ORDER BY CAST(SUBSTR(noRegistrasiOP,3,12) AS UNSIGNED) DESC LIMIT 1");
		return $query;
	}

    function insertRegistrasi($noRegistrasiOP,$tglRegistrasiOP,$noRM,$noRegistrasiPasien,$noDaftarPasien,$instalasi,$dokterPengirim,$jenisOperasi,$tglPermintaanOP,$keterangan,$statusOP,$statusBaca,$idUser,$tglUser){
        $query=$this->db->query("INSERT INTO t_registrasiop (noRegistrasiOP,tglRegistrasiOP,noRM,noRegistrasiPasien,noDaftarPasien,instalasi,dokterPengirim,jenisOperasi,tglPermintaanOP,tglKonfirmasiJadwalOP,keterangan,statusOP,statusBaca,idUser,tglUser) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($noRegistrasiOP,$tglRegistrasiOP,$noRM,$noRegistrasiPasien,$noDaftarPasien,$instalasi,$dokterPengirim,$jenisOperasi,$tglPermintaanOP,$tglPermintaanOP,$keterangan,$statusOP,$statusBaca,$idUser,$tglUser));
        return $query;
    }

    function insertTindakan($noTindakanOP,$noRegistrasiOP,$statusPembayaran,$dokterOP,$idUser,$tglUser){
    	$query=$this->db->query("INSERT INTO t_tindakanop (noTindakanOP,noRegistrasiOP,statusPembayaran,dokterOP,idUser,tglUser) VALUES (?,?,?,?,?,?)",array($noTindakanOP,$noRegistrasiOP,$statusPembayaran,$dokterOP,$idUser,$tglUser));
    	return $query;
    }

    function insertAnestesi($noTindakanAnestesi,$noRegistrasiOP,$idUser,$tglUser){
        $query=$this->db->query("INSERT INTO t_tindakananestesi (noTindakanAnestesi,noRegistrasiOP,idUser,tglUser) VALUES (?,?,?,?)",array($noTindakanAnestesi,$noRegistrasiOP,$idUser,$tglUser));
        return $query;
    }

    function insertDiagnosa($noRegistrasiOP,$diagnosaPra,$tglDiagniosaPra,$dokterDiagnosaPra,$sarsCovid,$idUser,$tglUser){
        $query=$this->db->query("INSERT INTO t_diagnosapasienop (noRegistrasiOP,diagnosaPra,tglDiagniosaPra,dokterDiagnosaPra,sarsCovid,idUser,tglUser) VALUES (?,?,?,?,?,?,?)",array($noRegistrasiOP,$diagnosaPra,$tglDiagniosaPra,$dokterDiagnosaPra,$sarsCovid,$idUser,$tglUser));
        return $query;
    }
}
