<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    function __construct(){
		parent::__construct();		
        $this->load->model('m_user');
        $this->load->helper('url');
	}

	function index()
	{
    $data['user'] = $this->m_user->tampil_data()->result();    
		$this->load->view('v_user',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_user->input_data($data,'user');
		redirect('crud/index');
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
	
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_user->update_data($where,$data,'user');
		redirect('crud/index');
	}
}

