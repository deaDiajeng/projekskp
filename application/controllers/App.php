<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    public function index()
    {
        $this->load->model('CMSMenu_model');
        $this->load->model('Agenda_model');
        $this->load->model('Gallery_model');
        $this->load->model('Capaian_model');

        $menu_settings = $this->CMSMenu_model->getAll(); // Hasilnya array, bukan object
        $menu_status = [];

        foreach ($menu_settings as $menu) {
            $menu_status[$menu['menu_utama']] = $menu['is_active'];
        }

        $data['agenda']  = (!empty($menu_status['agenda'])  && $menu_status['agenda'])  ? $this->Agenda_model->get_all()  : [];
        $data['gallery'] = (!empty($menu_status['gallery']) && $menu_status['gallery']) ? $this->Gallery_model->get_all() : [];
        $data['capaian'] = (!empty($menu_status['capaian']) && $menu_status['capaian']) ? $this->Capaian_model->get_all() : [];

        $data['menu_status'] = $menu_status;

        $this->load->view('index', $data);
    }
}
