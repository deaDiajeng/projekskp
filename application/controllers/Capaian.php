<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capaian extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Capaian_model');
        if (!$this->session->userdata('user_id')) {
        redirect('login');
        }
    }

    public function index() 
    {
        $data['achievement'] = $this->Capaian_model->get_all();
        
        $this->load->view('layout/header');
        // $this->load->view('layout/adminav');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/capaian', $data); 
        $this->load->view('script/capaian_script');
        $this->load->view('layout/footer');
    }

    
    public function save()
    {
        $name = $this->input->post('name');
        $achievement = $this->input->post('achievement');

        $config['upload_path'] = './uploads/capaian/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['max_size'] = 7048;

        $this->load->library('upload', $config);

        $image = '';
        if (!empty($_FILES['image']['name'])) {
            // Tambahkan timestamp ke nama file
            $original_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $timestamp = date('Ymd_His'); 
            $new_name = $original_name . '_' . $timestamp . '.' . $extension;

            $_FILES['image']['name'] = $new_name;

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('capaian');
                return;
            }
        }

        $data = [
            'name' => $name,
            'achievement' => $achievement,
            'image' => $image,
            'is_deleted' => 0
        ];

        $this->Capaian_model->insert($data);
        $this->session->set_flashdata('success', 'Data Capaian berhasil ditambahkan');
        redirect('capaian');
    }


    public function update()
    {
        $id = $this->input->post('id_achievement');
        $name = $this->input->post('name');
        $achievement = $this->input->post('achievement');
        $oldImage = $this->input->post('old_image');

        $config['upload_path'] = './uploads/capaian/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 7048;

        $this->load->library('upload', $config);

        if (!empty($_FILES['image']['name'])) {
            // Rename file dengan timestamp
            $original_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $timestamp = date('Ymd_His');
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $new_name = $original_name . '_' . $timestamp . '.' . $extension;

            $_FILES['image']['name'] = $new_name;

            if ($this->upload->do_upload('image')) {
                $uploadedData = $this->upload->data();
                $newImage = $uploadedData['file_name'];

                // Hapus gambar lama
                $oldPath = './uploads/capaian/' . $oldImage;
                if (file_exists($oldPath) && is_file($oldPath)) {
                    unlink($oldPath);
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('capaian');
                return;
            }
        } else {
            $newImage = $oldImage;
        }

        $data = [
            'name' => $name,
            'achievement' => $achievement,
            'image' => $newImage
        ];

        $this->db->where('id_achievement', $id);
        $this->db->update('achievement', $data);

        $this->session->set_flashdata('success', 'Data Capaian berhasil diperbarui.');
        redirect('capaian');
    }


    public function delete($id)
    {
        // Ambil data agenda berdasarkan id
        $capaian = $this->db->get_where('achievement', ['id_achievement' => $id])->row();

        if ($capaian) {
            // Hapus file gambar jika ada
            $path = './uploads/capaian/' . $achievement->image;
            if (file_exists($path) && is_file($path)) {
                unlink($path);
            }

            // Soft delete (update is_deleted = 1)
            $this->db->where('id_achievement', $id);
            $this->db->update('achievement', ['is_deleted' => 1]);

            $this->session->set_flashdata('success', 'Data Capaian berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data Capaian tidak ditemukan.');
        }

        redirect('capaian');
    }
}
