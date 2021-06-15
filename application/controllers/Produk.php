<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
public function kategori()
 {
 $data['judul'] = 'Kategori Mobil';
 $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
 $data['kategori'] = $this->ModelMobil->getKategori()->result_array();
 $this->form_validation->set_rules('kategori', 'Kategori',
'required', [ 'required' => 'Nama Mobil harus diisi']);
 if ($this->form_validation->run() == false) {
 $this->load->view('templates/header', $data);
 $this->load->view('templates/sidebar', $data);
 $this->load->view('templates/topbar', $data);
 $this->load->view('produk/kategori', $data);
 $this->load->view('templates/footer');
 } else {
 $data = [
 'kategori' => $this->input->post('kategori')
 ];
 $this->ModelMobil->simpanKategori($data);
 redirect('produk/kategori');
 }
 }
 public function hapusKategori()
 {
 $where = ['id' => $this->uri->segment(3)];
 $this->ModelMobil->hapusKategori($where);
 redirect('produk/kategori');
 }
}
