<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_alat extends CI_Model {
	
    public function __construct(){
        parent::__construct();
			
    }	
	
	function getalat() {
		$this->db->order_by('nama_alat','ASC');
		$query = $this->db->get('texteditor');  
		return $query->result();     
	}

	function insert_alat($data){
       $this->db->insert('texteditor', $data);  
    }

    public function getdetail($nama_alat){
        $sql = "SELECT * FROM texteditor 
                WHERE nama_alat = '".$nama_alat."'";                           
        return $this->db->query($sql)->row_array();  
    }	
}	
?>