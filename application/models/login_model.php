<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login_model extends MY_MODEL {
	public function login($user,$pass)
	{
		return $this->db->query("SELECT * from user where username='".$user."' and password='".md5($pass)."' and aktif='ya' order by id desc")->result_array();
	}
}