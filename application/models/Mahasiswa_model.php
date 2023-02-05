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

    function addData($data){
        $this->db->insert('mahasiswa', $data);
        return $this->db->insert_id();
    }

    function getDataById($id_mhs){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('id_mhs', $id_mhs);
        return $this->db->get()->row();
    }

    function updateData($data){
        $this->db->update('mahasiswa', $data);
        return $this->db->update();
    }

    function deleteData($id_mhs){
        $this->db->where('mahasiswa.id_mhs', $id_mhs);
        return $this->db->delete('mahasiswa');
    }
}

?>