<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAllCalas($limit, $start, $keyword=null, $order='tanggal_daftar'){
		if ($keyword) {
			$this->db->like('nama', $keyword);
			$this->db->or_like('npm', $keyword);
			$this->db->or_like('token', $keyword);
			$this->db->or_like('kelas', $keyword);
		} else{
			$keyword = null;
		}
		$this->db->select('token, tanggal_daftar, npm, nama, kelas, tempat_lahir, tanggal_lahir, email, no_hp, semester, ipk, tbl_biodata.id_region, tbl_biodata.id_jk, tbl_region.region, tbl_jenis_kelamin.jk');
    	$this->db->from('tbl_biodata');
    	$this->db->join('tbl_region','tbl_region.id_region = tbl_biodata.id_region');
    	$this->db->join('tbl_jenis_kelamin','tbl_jenis_kelamin.id_jk = tbl_biodata.id_jk');
    	$this->db->order_by($order, 'ASC');
    	return $this->db->limit($limit, $start)->get()->result_array();
	}

	public function getDetailCalas($token){
		$this->db->select('tbl_biodata.token, tanggal_daftar, tbl_biodata.npm, nama, kelas, tempat_lahir, tanggal_lahir, email, no_hp, semester, ipk, tbl_biodata.id_region, tbl_biodata.id_jk, tbl_region.region, tbl_jenis_kelamin.jk, tbl_dokumen.nama_file');
    	$this->db->from('tbl_biodata');
    	$this->db->join('tbl_region','tbl_region.id_region = tbl_biodata.id_region');
    	$this->db->join('tbl_jenis_kelamin','tbl_jenis_kelamin.id_jk = tbl_biodata.id_jk');
    	$this->db->join('tbl_dokumen','tbl_dokumen.token = tbl_biodata.token');
    	$this->db->where('tbl_biodata.token', $token);
    	return $this->db->get()->result_array();
	}

	public function getNilai($limit, $start, $keyword = null){
		if ($keyword) {
			$this->db->like('nama', $keyword);
			$this->db->or_like('npm', $keyword);
			$this->db->or_like('kelas', $keyword);
			$this->db->or_like('tbl_nilai.token', $keyword);
		} else{
			$keyword = null;
		}
		$this->db->select('tbl_nilai.token, rata_teori, rata_praktik, rata_total, tbl_biodata.nama, tbl_biodata.npm, tbl_biodata.kelas, tbl_biodata.tanggal_daftar');
    	$this->db->from('tbl_nilai');
    	$this->db->join('tbl_biodata','tbl_biodata.token = tbl_nilai.token');
    	$this->db->order_by('tbl_biodata.tanggal_daftar', 'ASC');
    	return $this->db->limit($limit, $start)->get()->result_array();
	}

	public function getNilaiByToken($token){
		$this->db->select('tbl_nilai.token, umum_ti, java, delphi, vb, python, c, networking, blender, sbd_mysql, php_ci, teori_java, teori_delphi, teori_vb, teori_python, teori_c, teori_networking, teori_blender, teori_sbd_mysql, teori_php_ci, tbl_biodata.nama, tbl_biodata.npm, tbl_biodata.kelas, tbl_biodata.tanggal_daftar');
    	$this->db->from('tbl_nilai');
    	$this->db->join('tbl_biodata','tbl_biodata.token = tbl_nilai.token');
    	$this->db->where('tbl_nilai.token', $token);
    	return $this->db->get()->result_array();
	}

	public function updateNilai(){
		$kls = $this->input->post('nilai_kelas', true);
		if (substr($kls, 0, 1) === '2') {
			$total_teori = $this->input->post('nilai-umum-ti', true) + $this->input->post('teori-nilai-java', true) + $this->input->post('teori-nilai-delphi', true) + $this->input->post('teori-nilai-vb', true) + $this->input->post('teori-nilai-python', true) + $this->input->post('teori-nilai-c', true);
			$rata_teori = $total_teori/6;
			
			$total_praktik = $this->input->post('nilai-java', true) + $this->input->post('nilai-delphi', true) + $this->input->post('nilai-vb', true) + $this->input->post('nilai-python', true) + $this->input->post('nilai-c', true);
			$rata_praktik = $total_praktik/5;

			$rata_total = ($rata_teori + $rata_praktik)/2;
		} else if (substr($kls, 0, 1) === '3') {
			$total_teori = $this->input->post('nilai-umum-ti', true) + $this->input->post('teori-nilai-java', true) + $this->input->post('teori-nilai-delphi', true) + $this->input->post('teori-nilai-vb', true) + $this->input->post('teori-nilai-python', true) + $this->input->post('teori-nilai-c', true) + $this->input->post('teori-nilai-blender', true) + $this->input->post('teori-nilai-networking', true) + $this->input->post('teori-nilai-sbd-mysql', true);
			$rata_teori = $total_teori/9;
			
			$total_praktik = $this->input->post('nilai-java', true) + $this->input->post('nilai-delphi', true) + $this->input->post('nilai-vb', true) + $this->input->post('nilai-python', true) + $this->input->post('nilai-c', true) + $this->input->post('nilai-blender', true) + $this->input->post('nilai-networking', true) + $this->input->post('nilai-sbd-mysql', true);
			$rata_praktik = $total_praktik/8;

			$rata_total = ($rata_teori + $rata_praktik)/2;
		} else{
			$total_teori = $this->input->post('nilai-umum-ti', true) + $this->input->post('teori-nilai-java', true) + $this->input->post('teori-nilai-delphi', true) + $this->input->post('teori-nilai-vb', true) + $this->input->post('teori-nilai-python', true) + $this->input->post('teori-nilai-c', true) + $this->input->post('teori-nilai-blender', true) + $this->input->post('teori-nilai-networking', true) + $this->input->post('teori-nilai-sbd-mysql', true) + $this->input->post('teori-nilai-php-ci', true);
			$rata_teori = $total_teori/10;
			
			$total_praktik = $this->input->post('nilai-java', true) + $this->input->post('nilai-delphi', true) + $this->input->post('nilai-vb', true) + $this->input->post('nilai-python', true) + $this->input->post('nilai-c', true) + $this->input->post('nilai-blender', true) + $this->input->post('nilai-networking', true) + $this->input->post('nilai-sbd-mysql', true)+$this->input->post('nilai-php-ci', true);
			$rata_praktik = $total_praktik/9;

			$rata_total = ($rata_teori + $rata_praktik)/2;
		}
		$data = [
			'umum_ti' => $this->input->post('nilai-umum-ti', true),

			'teori_java' => $this->input->post('teori-nilai-java', true),
			'teori_delphi' => $this->input->post('teori-nilai-delphi', true),
			'teori_vb' => $this->input->post('teori-nilai-vb', true),
			'teori_python' => $this->input->post('teori-nilai-python', true),
			'teori_c' => $this->input->post('teori-nilai-c', true),
			'teori_blender' => $this->input->post('teori-nilai-blender', true),
			'teori_networking' => $this->input->post('teori-nilai-networking', true),
			'teori_sbd_mysql' => $this->input->post('teori-nilai-sbd-mysql', true),
			'teori_php_ci' => $this->input->post('teori-nilai-php-ci', true),

			'java' => $this->input->post('nilai-java', true),
			'delphi' => $this->input->post('nilai-delphi', true),
			'vb' => $this->input->post('nilai-vb', true),
			'python' => $this->input->post('nilai-python', true),
			'c' => $this->input->post('nilai-c', true),
			'blender' => $this->input->post('nilai-blender', true),
			'networking' => $this->input->post('nilai-networking', true),
			'sbd_mysql' => $this->input->post('nilai-sbd-mysql', true),
			'php_ci' => $this->input->post('nilai-php-ci', true),

			'rata_teori' => $rata_teori,
			'rata_praktik' => $rata_praktik,
			'rata_total' =>	$rata_total
		];
		$this->db->where('token', $this->input->post('nilai_token', true));
		$this->db->update('tbl_nilai', $data);
	}

	public function id_peserta($kode){
    	$this->db->select('token');
    	$this->db->from('tbl_biodata');
    	$this->db->like('token', $kode);
    	$this->db->order_by('tanggal_daftar', 'DESC');
    	$this->db->limit(1);
    	return $this->db->get()->result_array();
    }

    public function report($token){
    	$this->db->select('tbl_nilai.token, umum_ti, java, delphi, vb, python, c, networking, blender, sbd_mysql, php_ci, teori_java, teori_delphi, teori_vb, teori_python, teori_c, teori_networking, teori_blender, teori_sbd_mysql, teori_php_ci, rata_teori, rata_praktik, rata_total, tbl_biodata.nama, tbl_biodata.npm, tbl_biodata.kelas, tbl_biodata.ipk, tbl_biodata.no_hp, tbl_foto.nama_file');
    	$this->db->from('tbl_nilai');
    	$this->db->join('tbl_biodata','tbl_biodata.token = tbl_nilai.token');
    	$this->db->join('tbl_foto','tbl_foto.token = tbl_nilai.token');
    	$this->db->where('tbl_nilai.token', $token);
    	return $this->db->get()->result_array();
    }
}

/* End of file models_admin.php */
/* Location: ./application/models/models_admin.php */