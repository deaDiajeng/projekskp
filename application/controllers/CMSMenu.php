<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CMSMenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CMSMenu_model');
        if (!$this->session->userdata('user_id')) {
        redirect('login');
        }
    }

    public function index()
    {
        // Ambil data dari model
        $menu_settings = $this->CMSMenu_model->getAll();
        $menu_status = [];

        foreach ($menu_settings as $menu) {
            $menu_status[$menu['menu_utama']] = $menu['is_active'];
        }

        // Kirim data ke view
        $data['menu_settings'] = $menu_settings;
        $data['menu_status'] = $menu_status;

        $this->load->view('layout/header');
        // $this->load->view('layout/adminav');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/cms_menu', $data);
        $this->load->view('layout/footer');
    }

    public function toggle()
    {
        $menu = $this->input->post('menu');
        $status = $this->input->post('status');

        $this->CMSMenu_model->updateMenuStatus($menu, $status);
        $this->session->set_flashdata('success', 'Pengaturan menu berhasil diupdate.');
        redirect('CMSMenu');
    }
}
