<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
public function index(){
      $data = $this->db->query("SELECT * FROM mahasiswa");
           foreach ($data->result_array() as $mahasiswa) {
                echo "Nama : ".$mahasiswa['nama']."<br/>";
                echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
    }
 }
}