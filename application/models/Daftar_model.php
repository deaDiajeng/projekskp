<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_all() 
    {
        // return $this->db->get('achievement')->result();
        // return $this->db->get_where('registration', ['is_deleted' => 0])->result();
        return $this->db
            ->where('is_deleted', 0)
            ->order_by('id_registration', 'DESC') // sort terbaru di atas
            ->get('registration')
            ->result();
    }

    public function insert($data) 
    {
        $this->db->insert('registration', $data);
    }

    // public function update($id, $data) 
    // {
    //     $this->db->where('id_registration', $id)->update('registration', $data);
    // }

    // public function soft_delete($id) {
    //     $this->db->where('id_registration', $id)->update('registration', ['is_deleted' => 1]);
    // }
}
