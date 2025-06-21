<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CMSMenu_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        return $this->db->get('cms_menu_settings')->result_array();
    }

    public function updateMenuStatus($menu, $status)
    {
        $this->db->where('menu_utama', $menu);
        $this->db->update('cms_menu_settings', ['is_active' => $status]);
    }
}
