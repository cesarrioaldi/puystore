<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    
    public function index()
    {
        $data['judul'] = 'Data Item';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['item'] = $this->ModelItem->getItem()->result_array();
        $data['kategori'] = $this->ModelItem->getKategori()->result_array();

        $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori harus diisi',
        ]);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|min_length[3]', [
            'required' => 'Keterangan harus diisi',
            'min_length' => 'Keterangan terlalu pendek'
        ]);
        

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'nama' => $this->input->post('nama', true),
                'kategori' => $this->input->post('kategori', true),
                'keterangan' => $this->input->post('keterangan', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelItem->simpanitem($data);
            redirect('item');
        }
    }

    public function hapusitem()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelItem->hapusItem($where);
        redirect('item');
    }

    public function ubahItem()
    {
        $data['judul'] = 'Ubah Data Item';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['item'] = $this->ModelItem->itemWhere(['id' => $this->uri->segment(3)])->result_array();
        $kategori = $this->ModelItem->joinKategoriItem(['item.id' => $this->uri->segment(3)])->result_array();
        foreach ($kategori as $k) {
            $data['id'] = $k['id_kategori'];
            $data['k'] = $k['kategori'];
        }
        $data['kategori'] = $this->ModelItem->getKategori()->result_array();

        $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', [
            'required' => 'Nama item harus diisi',
            'min_length' => 'Nama item terlalu pendek'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Nama Kategori harus diisi',
        ]);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|min_length[3]', [
            'required' => 'Keterangan harus diisi',
            'min_length' => 'Keterangan terlalu pendek'
        ]);
        

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/ubah_service', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'nama' => $this->input->post('nama', true),
                'kategori' => $this->input->post('kategori', true),
                'keterangan' => $this->input->post('keterangan', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelItem->updateItem($data, ['id' => $this->input->post('id')]);
            redirect('item');
        }
    }

    //manajemen kategori
    public function kategori()
    {
        $data['judul'] = 'Kategori Item';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelItem->getKategori()->result_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori', TRUE)
            ];

            $this->ModelItem->simpanKategori($data);
            redirect('item/kategori');
        }
    }

    public function ubahKategori()
    {
        $data['judul'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelItem->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min_length[3]', [
            'required' => 'Nama Kategori harus diisi',
            'min_length' => 'Nama Kategori terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/ubah_kategori', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kategori' => $this->input->post('kategori', true)
            ];

            $this->ModelItem->updateKategori(['id' => $this->input->post('id')], $data);
            redirect('item/kategori');
        }
    }

    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelItem->hapusKategori($where);
        redirect('item/kategori');
    }
}
