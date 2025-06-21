<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Gallery_model');
    }

    public function index() 
    {
        $data['gallery'] = $this->Gallery_model->get_all();

        $this->load->view('layout/header');
        // $this->load->view('layout/adminav');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/gallery', $data);
        $this->load->view('script/gallery_script');
        $this->load->view('layout/footer');
    }


    public function save()
    {
        //tes gitgraph
        $event = $this->input->post('event');
        // $image = $this->input->post('image');

        $config['upload_path'] = './uploads/galeri/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        $image = '';
        if (!empty($_FILES['image']['name'])) {
            // Tambahkan timestamp ke nama file
            $original_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $timestamp = date('Ymd_His'); 
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            // $timestamp = date('Ymd_His');
            $new_name = $original_name . '_' . $timestamp . '.' . $extension;

            $_FILES['image']['name'] = $new_name;

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('gallery');
                return;
            }
        }

        $data = [
            'event' => $event,
            'image' => $image,
            // 'is_deleted' => 0
        ];

        $this->Gallery_model->insert($data);
        $this->session->set_flashdata('success', 'Data Gallery berhasil ditambahkan');
        redirect('gallery');
    }


    public function update()
    {
        $id = $this->input->post('id_gallery');
        $event = $this->input->post('event');
        $oldImage = $this->input->post('old_image');

        $config['upload_path'] = './uploads/galeri/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!empty($_FILES['image']['name'])) {
            // Rename file dengan timestamp
            $original_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            // $timestamp = date('Ymd_His');
            $new_name = $original_name . '_' . $timestamp . '.' . $extension;

            $_FILES['image']['name'] = $new_name;

            if ($this->upload->do_upload('image')) {
                $uploadedData = $this->upload->data();
                $newImage = $uploadedData['file_name'];

                // Hapus gambar lama
                $oldPath = './uploads/galeri/' . $oldImage;
                if (file_exists($oldPath) && is_file($oldPath)) {
                    unlink($oldPath);
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('gallery');
                return;
            }
        } else {
            $newImage = $oldImage;
        }

        $data = [
            'event' => $event,
            'image' => $newImage
        ];

        $this->db->where('id_gallery', $id);
        $this->db->update('gallery', $data);

        $this->session->set_flashdata('success', 'Data Gallery berhasil diperbarui.');
        redirect('gallery');
    }


public function delete($id)
{
    $gallery = $this->db->get_where('gallery', ['id_gallery' => $id])->row();

    if ($gallery) {
        // Hapus file gambar jika ada
        $path = './uploads/galeri/' . $gallery->image;
        if (!empty($gallery->image) && file_exists($path) && is_file($path)) {
            unlink($path);
        }

        // Jika kamu ingin soft delete
        $this->db->where('id_gallery', $id);
        $this->db->update('gallery', ['is_deleted' => 1]);

        // Kalau ingin hard delete
        // $this->db->where('id_gallery', $id);
        // $this->db->delete('gallery');

        $this->session->set_flashdata('success', 'Data Gallery berhasil dihapus.');
    } else {
        $this->session->set_flashdata('error', 'Data Gallery tidak ditemukan.');
    }

    redirect('gallery');
}

}
