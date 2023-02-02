<?php 

class Mahasiswa_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAllData(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        return $this->db->get()->result_array();
    }

}

?>