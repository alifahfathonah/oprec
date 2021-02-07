<!-- ----TUTORIAL
https://www.petanikode.com/codeigniter-upload/
https://www.mynotescode.com/upload-gambar-dengan-codeigniter/
-----UPLOAD -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_oprec extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	public function get_jk(){
		return $this->db->get('tbl_jenis_kelamin')->result_array();
	}

	public function get_region(){
		return $this->db->get('tbl_region')->result_array();
	}

	public function add_calas(){
		date_default_timezone_set('Asia/Jakarta');
		$datestring = '%Y-%m-%d %H:%i:%s';
		$time = time();
		$now = mdate($datestring, $time);

		$data_biodata = [
			'token' => $this->input->post('token', true),
			'tanggal_daftar' => $now,
			'npm' => $this->input->post('npm', true),
			'nama' => $this->input->post('nama', true),
			'kelas' => strtoupper($this->input->post('kelas', true)),
			'tempat_lahir' => $this->input->post('tempat_lahir', true),
			'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
			'email' => $this->input->post('email', true),
			'no_hp' => $this->input->post('no_hp', true),
			'semester' => $this->input->post('semester', true),
			'ipk' => $this->input->post('ipk', true),
			'id_region' => $this->input->post('region', true),
			'id_jk' => $this->input->post('jk', true)
		];
		$this->db->insert('tbl_biodata', $data_biodata);
	}

	// Fungsi untuk melakukan proses upload foto
	public function upload_foto(){
		if ($_FILES['foto']['size'] > 0){
			$config['upload_path'] = './foto/';
			$config['allowed_types'] = 'jpg|jpeg';
			$config['max_size']  = '2048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;

	    	$this->upload->initialize($config); // Load konfigurasi uploadnya
	    	if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
	      	// Jika berhasil :
	    		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	    		return $return;
	    	} else{
	    	// Jika gagal :
	    		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors('Gagal Upload Foto'));
	    		return $return;
	    	}
		}else{
			$foto = 0;
			return $foto;
		}
    }

    public function save_foto($upload_foto){
    	$region = $this->input->post('region', true);
    	if ($region != 2 ) {
    		$data = array(
	    		'token' => $this->input->post('token', true),
	    		'npm' => $this->input->post('npm', true),
	    		'nama_file' => $upload_foto['file']['file_name'],
	    		'ukuran_file' => $upload_foto['file']['file_size'],
	    		'tipe_file' => $upload_foto['file']['file_ext']
	    	);
	    	$this->db->insert('tbl_foto', $data);
    	}
    }

	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './berkas/';
		$config['allowed_types'] = 'rar|zip';
		$config['max_size']  = '10240';
		$config['encrypt_name'] = TRUE;
		$config['remove_space'] = TRUE;

    	$this->upload->initialize($config); // Load konfigurasi uploadnya
    	if($this->upload->do_upload('berkas')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
    		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    		return $return;
    	} else{
    // Jika gagal :
    		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors('Gagal Upload Berkas'));
    		return $return;
    	}
    }

    public function save($upload){
    	$data = array(
    		'token' => $this->input->post('token', true),
    		'npm' => $this->input->post('npm', true),
    		'nama_file' => $upload['file']['file_name'],
    		'ukuran_file' => $upload['file']['file_size'],
    		'tipe_file' => $upload['file']['file_ext']
    	);
    	$this->db->insert('tbl_dokumen', $data);
    }

    public function save_nilai(){
    	$region = $this->input->post('region', true);
    	if ($region != 2 ) {
    		$data = array(
    			'token' => $this->input->post('token', true)
    		);
    		$this->db->insert('tbl_nilai', $data);	
    	}
    }    

    public function detail_peserta($token){
    	$this->db->select('token, npm, nama, kelas, email, no_hp, ipk, tbl_region.region');
    	$this->db->from('tbl_biodata');
    	$this->db->join('tbl_region','tbl_region.id_region = tbl_biodata.id_region');
    	$this->db->where('token', $token);
    	return $this->db->get()->result_array();
    }
}

/* End of file models_oprec.php */
/* Location: ./application/models/models_oprec.php */