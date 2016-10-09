<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends CI_Controller {

    public function __construct(){
        parent::__construct();
			$this->load->helper('url','form');	
			$this->load->model('m_alat');
    }
	
	public function index() {
		$data=array('list_alat'	=> $this->m_alat->getalat());		
		$this->load->view('v_tampil', $data);	
	}

	public function add() {	
		$this->load->view('v_add');	
	}
	
	public function save() {
		$data=array('nama_alat' => $this->input->post('nama_alat'),
					'jenis_alat' => $this->input->post('jenis_alat'),
					'keterangan' => $this->input->post('keterangan'));
		$this->m_alat->insert_alat($data);	
		redirect('alat');		
	}

	public function detail(){  
	    $nama_alat = $this->uri->segment(3);
	    $data = array(
	                'detail'=>$this->m_alat->getdetail($nama_alat));
		$this->load->view('v_detail');
	}
	
}
