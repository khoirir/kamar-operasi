<?php
class M_operasiselesai extends CI_Model
{

    function dataOperasiSelesai($tglawal, $tglakhir, $jenisop, $operator)
    {
        $sql = $this->db->query("
            SELECT
                tro.noRegistrasiOP AS noregop,
                tp.nmPasien AS pasien,
                tro.noRM AS norm,
                un.tglmrs AS tglmrs,
                DATE_FORMAT(tro.tglKonfirmasiJadwalOP,'%d-%m-%Y') AS tglop,
                tp.jenisKelamin AS jk,
                tro.instalasi AS instalasi,
                un.unit AS unit,
                tjo.jenisOperasi AS jenisop,
                top.kamarOP AS kamarop,
                tjo.keterangan AS warnajenisop,
                top.dokterOP AS dokterop,
                tmk.idMutuPelayanan AS id
            FROM
                t_registrasiop tro
                INNER JOIN t_tindakanop top ON tro.noRegistrasiOP = top.noRegistrasiOP
                INNER JOIN t_jenisop tjo ON tro.jenisOperasi = tjo.kdJenisOperasi
                INNER JOIN t_registrasi trg ON tro.noDaftarPasien = trg.noDaftar
                INNER JOIN t_pasien tp ON tro.noRM = tp.noRekamedis
                INNER JOIN (SELECT trj.noRegistrasiRawatJalan AS noregistrasi,DATE_FORMAT(trj.tglMasukRawatJalan,'%d-%m-%Y') AS tglmrs,tun.unit AS unit FROM t_registrasirawatjalan trj INNER JOIN t_unit tun ON trj.kdUnit = tun.kdUnit UNION ALL SELECT  tri.noDaftarRawatInap AS noregistrasi, DATE_FORMAT(tri.tglMasukRawatInap,'%d-%m-%Y') AS tglmrs,tri.rawatInap AS unit FROM t_registrasirawatinap tri ) un ON tro.noRegistrasiPasien = un.noregistrasi
                LEFT JOIN t_mutukamarop tmk ON tro.noRegistrasiOP = tmk.noRegistrasiOP
            WHERE
                tro.statusOP='5' AND tro.jenisOperasi $jenisop AND (tro.tglKonfirmasiJadwalOP BETWEEN '$tglawal' AND '$tglakhir') AND top.dokterop $operator
            ORDER BY
                tro.tglKonfirmasiJadwalOP ASC
        ");
        return $sql;
    }

    function getDataOperasi($tglawal, $tglakhir, $jenisop, $operator)
    {
        $sql = $this->db->query("
            SELECT
                DATE_FORMAT(top.jamInduksi,'%H:%i:%s') AS jaminduksi,
                DATE_FORMAT(top.jamIncisi,'%H:%i:%s') AS jamincisi,
                tp.nmPasien AS pasien,
                tro.noRM AS norm,
                un.tglmrs AS tglmrs,
                DATE_FORMAT(tro.tglKonfirmasiJadwalOP,'%d-%m-%Y') AS tglop,
                tp.jenisKelamin AS jk,
                tro.instalasi AS instalasi,
                tri.rawatInap AS ruangperawatan,
                un.unit AS unit,
                tjo.jenisOperasi AS jenisop,
                top.noTindakanOP AS notinop,
                top.kamarOP AS kamarop,
                tmk.kelangkapanAsesmen AS lengkapasesmen,
                tdo.diagnosaPra AS diagnosapra,
                tdo.diagnosaPost AS diagtnosapost,
                tdo.sarsCovid AS sarscovid,
                tro.dokterPengirim AS dokterpengirim,
                top.dokterOP AS dokterop,
                top.asistenOP AS asistenop,
                top.perawatInstrument AS perawatinstrument,
                top.perawatSirkuler AS perawatsirkuler,
                tan.dokterAnestesi AS dokteranestesi,
                tan.asistenAnestesi AS asistenanestesi,
                top.pemakaianImplan AS pakaiimplan,
                top.jenisImplan AS jenisimplan,
                tmk.siteMarking AS sitemarking,
                tmk.pemakaianGelangPasien AS pemakaiangelang,
                tmk.kesesuaianIdentitas AS kesesuaianidentitas,
                tmk.tertinggalBendaAsing AS bendaasing,
                tmk.dot AS dot,
                tmk.discrepancyOP AS discrepancyop,
                tmk.reOperasi AS reoperasi,
                tmk.tundaOP AS tundaop,
                tmk.signOut AS signout,
                tmk.kejadianPasienJatuh AS pasienjatuh,
                tmk.terdapatInsiden AS insidenpasien,
                tmk.kronologiInsiden AS kronologiinsiden,
                tmk.jenisInsiden AS jenisinsiden,
                tmk.tindakanSementara AS tindakansementara,
                tmk.permasalahanOP AS permasalahanop
            FROM
                t_registrasiop tro
                INNER JOIN t_tindakanop top ON tro.noRegistrasiOP = top.noRegistrasiOP
                INNER JOIN t_jenisop tjo ON tro.jenisOperasi = tjo.kdJenisOperasi
                INNER JOIN t_diagnosapasienop tdo ON tro.noRegistrasiOP = tdo.noRegistrasiOP
                INNER JOIN t_tindakananestesi tan ON tro.noRegistrasiOP = tan.noRegistrasiOP
                INNER JOIN t_registrasi trg ON tro.noDaftarPasien = trg.noDaftar
                INNER JOIN t_pasien tp ON tro.noRM = tp.noRekamedis
                INNER JOIN t_carabayar tcb ON trg.kdCaraBayar = tcb.kdCaraBayar
                INNER JOIN t_penjamin tpj ON trg.kdPenjamin = tpj.kdPenjamin
                LEFT JOIN t_tenagamedis2 tnm ON tro.dokterPengirim = tnm.namapetugasMedis
                INNER JOIN (SELECT trj.noRegistrasiRawatJalan AS noregistrasi,DATE_FORMAT(trj.tglMasukRawatJalan,'%d-%m-%Y') AS tglmrs,tun.unit AS unit FROM t_registrasirawatjalan trj INNER JOIN t_unit tun ON trj.kdUnit = tun.kdUnit UNION ALL SELECT  tri.noDaftarRawatInap AS noregistrasi, DATE_FORMAT(tri.tglMasukRawatInap,'%d-%m-%Y') AS tglmrs,tri.rawatInap AS unit FROM t_registrasirawatinap tri ) un ON tro.noRegistrasiPasien = un.noregistrasi
                LEFT JOIN t_mutukamarop tmk ON tro.noRegistrasiOP = tmk.noRegistrasiOP
                LEFT JOIN t_rawatinap tri ON tmk.ruangPerawatan = tri.kdRawatInap
            WHERE
                tro.statusOP='5' AND tro.jenisOperasi $jenisop AND (tro.tglKonfirmasiJadwalOP BETWEEN '$tglawal' AND '$tglakhir') AND top.dokterop $operator
            ORDER BY
                tro.tglKonfirmasiJadwalOP ASC;
        ");
        return $sql->result();
    }

    function getDetailTarifOperasi($notinop)
    {
        $sql = $this->db->query("SELECT operator AS operator,tindakan AS tindakan,subTotal AS subtotal,jenisTindakan AS jenistindakan FROM t_detailtindakanop WHERE statusHapus=? AND noTindakanOP=?", array('0', $notinop));
        return $sql->result();
    }

    function getJenisOperasi()
    {
        $sql = $this->db->query("SELECT kdJenisOperasi AS kode,jenisOperasi AS jenisoperasi FROM t_jenisop ORDER BY jenisOperasi");
        return $sql->result();
    }

    function getDokter()
    {
        return $this->db->query("SELECT kdPetugasMedis AS kode,namapetugasMedis AS dokter FROM vw_dokter ORDER BY namapetugasMedis ASC")->result();
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

    //    function getDetailPasien($noregop){
    // 	$hsl=$this->db->query("SELECT * FROM vw_permintaanoperasi WHERE noregistrasiop=?",array($noregop));
    // 	return $hsl;
    //    }

    //    function getDiagnosaPasien($norm){
    //        return $this->db->query("SELECT tgldiagnosa,tgldaftar,kdicd10,icd10,deskripsi,jenisdiagnosa,dokter FROM vw_diagnosapasien WHERE norm=? ORDER BY jenisdiagnosa DESC, IF(tgldiagnosa IS NULL,tgldaftar,tgldiagnosa) ASC",array($norm));
    //    }

    //    function getDetailPelaksanaOperasi($notinop){
    //    	$sql=$this->db->query("SELECT noTindakanOP AS notinop, noRegistrasiOP AS noregop, DATE_FORMAT(tglTindakan,'%d-%m-%Y %H:%i:%s') AS tgltindakan, totalTarifTIndakan AS total, dokterOP AS dokterop, timOP AS asistenop, dokterAnestesi AS dokteranestesi, asistenAnestesi AS asistenanestesi, perawatSirkuler AS perawatsirkuler, perawatInstrument AS perawatinstrument, radiografer, jenisAnestesi AS jenisanestesi,statusPembayaran AS statuspembayaran, tglPembayaran AS tglpembayaran FROM t_tindakanok WHERE noTindakanOP=?",array($notinop));
    //    	return $sql;
    //    }

    //    function getTindakan($notinop){
    // 	$sql=$this->db->query("SELECT * FROM t_detailtindakanok WHERE noTindakanOP=? AND statusHapus='0'",array($notinop));
    // 	return $sql;
    // }

    // function getLaporanHasilOperasi($noregop){
    // 	$sql=$this->db->query("SELECT noHasilOP AS nohasilop,noRegistrasiOP AS noregop,diagnosaPostOP AS diagnosapost,jaringanEksisiInsisi AS jaringan,pemeriksaanPA AS pemeriksaanpa,DATE_FORMAT(operasiMulai,'%d-%m-%Y') AS tglop,DATE_FORMAT(operasiMulai,'%H:%i:%s') AS opmulai,DATE_FORMAT(operasiSelesai,'%H:%i:%s') AS opselesai,(SELECT TIMEDIFF(operasiSelesai, operasiMulai)) AS lamaop,DATE_FORMAT(pembiusanMulai,'%H:%i:%s') AS biusmulai,DATE_FORMAT(pembiusanSelesai,'%H:%i:%s') AS biusselesai,(SELECT TIMEDIFF(pembiusanSelesai, pembiusanMulai)) AS lamabius,laporan AS laporan,jmlPendarahan AS jmlpendarahan,komplikasi AS komplikasi,instruksiPostOP AS instruksipost,pemakaianImplan AS pakaiimplan,hasilOP AS hasilop FROM t_hasiloperasi WHERE noRegistrasiOP=?",array($noregop));
    // 	return $sql;
    // }

    // function getLaporanOperasiCetak($nohasilop){
    //    	$sql=$this->db->query("SELECT * FROM vw_cetakhasiloperasi WHERE nohasilop=?",array($nohasilop));
    //    	return $sql;
    //    }
}
