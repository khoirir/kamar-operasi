<?php
class Login extends CI_Controller{

	function __construct(){
		Parent::__construct();
		$this->load->model("m_login");
	}

	public function index(){
		if($this->session->userdata("sess_admin")){
			$data_admin = $this->session->userdata("sess_admin");
			if($data_admin["level"]=="OK IBS"){
				redirect('dashboard','refresh');
			}
		}
		else if($this->session->userdata("akun_salah")){
			$sess_data = $this->session->userdata("akun_salah");
			$data["pesan_salah"] = $sess_data["teks"];
			$this->load->view('v_login',$data);
			$this->session->unset_userdata("akun_salah");
		}
		else{
			$this->load->view("v_login");
		}
	}
	public function cekLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = $this->m_login->userLogin($username,$password);
		if($data>0){
			$data_user = $this->m_login->getUserData($username,$password);
			$sess_data = array(
				"id" => $data_user[0]->ID,
				"nama" => $data_user[0]->NAMA,
				"level" => $data_user[0]->UNIT,
			);
			$this->session->set_userdata("sess_admin",$sess_data);
			$data_admin = $this->session->userdata("sess_admin");
			if($data_admin["level"]=="OK IBS"){
				redirect('dashboard','refresh');
			}
		}
		else{
			$sess_data = array(
				"teks" => "Username atau Password Salah"
				);
			$this->session->set_userdata("akun_salah",$sess_data);
			redirect("login","refresh");
		}
	}
	public function keluar(){
		if($this->session->has_userdata("sess_admin")){
			$this->session->unset_userdata("sess_admin");
			redirect("login","refresh");
		}
	}
}
?>