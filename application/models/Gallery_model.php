<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_all() 
    {
        // return $this->db->get('gallery')->result();
        // return $this->db->get_where('gallery', ['is_deleted' => 0])->result();
        return $this->db
            ->where('is_deleted', 0)
            ->order_by('id_gallery', 'DESC') // sort terbaru di atas
            ->get('gallery')
            ->result();
    }

    // public function get_all_index()
    // {
    //     // Ambil field yang sesuai, sesuaikan dengan nama kolom di database
    //     return $this->db->select('event, image')
    //         ->get_where('gallery', ['is_deleted' => 0])
    //         ->result();
    // }

    public function insert($data) 
    {
        $this->db->insert('gallery', $data);
    }

    public function update($id, $data) 
    {
        $this->db->where('id_gallery', $id)->update('gallery', $data);
    }

    // public function soft_delete($id) {
    //     $this->db->where('id_gallery', $id)->update('gallery', ['is_deleted' => 1]);
    // }
}
