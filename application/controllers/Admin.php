<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->session->userdata('login')==='1'){
			redirect('admin/dashboard');
		}
		$data['title'] = 'Indikator Nasional Mutu';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/login');
		$this->load->view('include/footer');
		if (isset( $_POST['submit'])){
			$this->_login();
		}

	}

	private function _login(){
		if(empty($this->session->userdata("nip")))
		{
			 $datas = $this->input->post();
			   if(!empty($datas))
			   {
			   $this->load->model('login_model');
			  //var_dump($datas);
					$data = $this->login_model->login($datas['uname'],$datas['pwd']);
						 //var_dump($data);
					if(!empty($data))
					{
				
						$start=time();
						$data_session = array(
							'nip' =>$data[0]['nip'],
							//'nama' => $data[0]['nama_lengkap'],
							'user' => $data[0]['username'],
							'kdrs' => $data[0]['kode_rs'],
							'jenis' => $data[0]['jenis'],
							'admin' => $data[0]['admin']
							);
						$this->session->set_userdata($data_session);
						redirect("dashboard");
						}
						redirect("dashboard");
						$this->load->view('admin/dashboard/biodata');
						$this->load->view('admin/dashboard/sidebar');
						$this->load->view('admin/dashboard/footer');
			}else{
				$this->session->set_flashdata('message', 'gagal');
				
			}
    	}
	}
	
	
	public function logout(){
		if ($this->session->userdata('login')==='1'){
			$this->session->unset_userdata('login');
			$this->session->unset_userdata('region');
			redirect('admin');	
		}else{
			redirect('admin');
		}
	}

	public function dashboard()
	{
		//Load library pagination
		$this->load->library('pagination');

		

		//config pagination
		$config['base_url'] = base_url('admin/dashboard/index');
		

		//initialize pagination
		$this->pagination->initialize($config);
		
		
		$this->load->view('admin/dashboard/header');
		if ($this->session->userdata('region') == 'labti_xm') {
			$this->load->view('admin/dashboard/sidebar_xm');	
		} else{
			$this->load->view('admin/dashboard/sidebar');
		}
		$this->load->view('admin/dashboard/biodata');
		$this->load->view('admin/dashboard/footer');
	}


	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */