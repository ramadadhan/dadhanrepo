<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller{
    public function index(){
        $data = $this->db->query("SELECT * FROM mahasiswa");
        foreach ($data->result_array() as $mahasiswa; {
            echo "Nama : ".$mahasiswa['nama']."<br/>";
            echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
        }
    }
}
?>