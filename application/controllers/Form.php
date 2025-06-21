<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
    }

    public function index()
    {
        
        $this->load->view('form');
    }

    public function save()
    {
        $fullname = $this->input->post('fullname');
        $birth_date = $this->input->post('birth_date');
        $address = $this->input->post('address');
        $school = $this->input->post('school');
        $grade = $this->input->post('grade');
        $parent = $this->input->post('parent');
        $parent_job = $this->input->post('parent_job');
        $parent_phone = $this->input->post('parent_phone');

        // timestamp buat foto
        // $config['upload_path'] = './uploads/capaian/';
        // $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        // $config['max_size'] = 2048;

        // $this->load->library('upload', $config);

        // $image = '';
        // if (!empty($_FILES['image']['name'])) {
        //     // Tambahkan timestamp ke nama file
        //     $original_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
        //     $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        //     $timestamp = date('Ymd_His'); 
        //     $new_name = $original_name . '_' . $timestamp . '.' . $extension;

        //     $_FILES['image']['name'] = $new_name;

        //     if ($this->upload->do_upload('image')) {
        //         $image = $this->upload->data('file_name');
        //     } else {
        //         $error = $this->upload->display_errors();
        //         $this->session->set_flashdata('error', $error);
        //         redirect('capaian');
        //         return;
        //     }
        // }

        $data = [
            'fullname' => $fullname,
            'birth_date' => $birth_date,
            'address' => $address,
            'school' => $school,
            'grade' => $grade,
            'parent' => $parent,
            'parent_job' => $parent_job,
            'parent_phone' => $parent_phone,
            'is_deleted' => 0
        ];

        $this->Form_model->insert($data);
        $this->session->set_flashdata('success', 'Formulir Pendaftaran telah dikirim. 
        Silahkan konfirmasi pendaftaran ke no WhatsApp');
        redirect('');
    }

}