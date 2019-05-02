<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
