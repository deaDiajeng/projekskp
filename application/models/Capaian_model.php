<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capaian_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_all() 
    {
        // return $this->db->get('achievement')->result();
        // return $this->db->get_where('achievement', ['is_deleted' => 0])->result();
        return $this->db
            ->where('is_deleted', 0)
            ->order_by('id_achievement', 'DESC') // sort terbaru di atas
            ->get('achievement')
            ->result();
    }

    // public function get_all_index()
    // {
    //     // Ambil field yang sesuai, sesuaikan dengan nama kolom di database
    //     return $this->db->select('name, achievement, image')
    //         ->get_where('achievement', ['is_deleted' => 0])
    //         ->result();
    // }

    public function insert($data) 
    {
        $this->db->insert('achievement', $data);
    }

    public function update($id, $data) 
    {
        $this->db->where('id_achievement', $id)->update('achievement', $data);
    }

    // public function soft_delete($id) {
    //     $this->db->where('id_achievement', $id)->update('achievement', ['is_deleted' => 1]);
    // }
}
