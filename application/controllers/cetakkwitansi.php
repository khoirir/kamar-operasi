<?php
class Cetakkwitansi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_proses');
	}

	function cetak(){
		if($this->session->userdata("sess_admin")){
			$sess_data = $this->session->userdata("sess_admin");
			$data["id"] = $sess_data["id"];
			$data["nama"]=$sess_data["nama"];
			$noregop=$_POST['hidden_noregop'];
			$ex_noregop = explode(",",$noregop);
			$in_noregop=substr(join("','", $ex_noregop),2)."'";
			$data['pasien']=$this->m_proses->get("noregistrasiop,tglregistrasiop,norm,namapasien,jk,tgllahir,unitasal,dokterpengirim,carabayar,notinop,total,penjamin","vw_cetakkwitansitindakanop","noregistrasiop IN(".$in_noregop.")")->result();
			$this->load->view("v_cetakkwitansi",$data);
		}
		else{
			redirect("login","refresh");
		}
	}

	function cetak2($nore){
		if($this->session->userdata("sess_admin")){
			print_r($nore);
			// $data['pasien']=$this->m_proses->get("noregistrasiop,tglregistrasiop,norm,namapasien,jk,tgllahir,unitasal,dokterpengirim,carabayar,notindakanop,total,penjamin","vw_cetakkwitansi","noregistrasiop IN(".$noregop.")")->result();
			// $notindakanop=$data['pasien']->notindakanop;
			// $data['tindakan']=$this->m_proses->get("tindakan,jmlTindakan AS jml,operator,FORMAT(tarif,2,'de_DE') AS tarif,FORMAT(subTotal,2,'de_DE') AS subtotal","t_detailtindakanok","noTindakanOP='".$notindakanop."' AND statusHapus='0'")->result();
			// $this->load->view("v_cetakkwitansi",$data);
		}
		else{
			redirect("login","refresh");
		}
	}
}
?>