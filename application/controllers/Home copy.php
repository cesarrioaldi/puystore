<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['itemnya'] = $this->ModelItem->getitem()->result();
		$kategori = $this->ModelItem->joinKategoriItem(['item.id' => $this->uri->segment(3)])->result_array();
        foreach ($kategori as $k) {
            $data['id'] = $k['id_kategori'];
            $data['k'] = $k['kategori'];
        }
        $data['kategori'] = $this->ModelItem->getKategori()->result_array();
		$this->load->view('home_head', $data);
		$this->load->view('home', $data);
	}

	public function tambah_aksi1()
	{

		// $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', [
        //     'required' => 'silahkan isi nama kamu',
        //     'min_length' => 'Berikan Nama lengkap kamu'
        // ]);
        // $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
        //     'required' => 'Kategori di isi ya kakak',
        // ]);
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'required|min_length[3]', [
        //     'required' => 'Keterangannya tolong di isi',
        //     'min_length' => 'Kasih keterangan yang jelas'
        // ]);
		// $this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]', [
        //     'required' => 'Isi alamatnya dong',
        //     'min_length' => 'Kasih alamat yang jelas'
        // ]);

		// if ($this->form_validation->run() == false) {
        //     $this->load->view('home_head');
		// 	$this->load->view('home');

        // } else {
			
		$nama	= $this->input->post('nama');
		$kategori	= $this->input->post('kategori');
		$keterangan	= $this->input->post('keterangan');
		$alamat	= $this->input->post('alamat');

		$data = array(
			'nama'			=> $nama,
			'kategori'		=> $kategori,
			'keterangan'	=> $keterangan,
			'alamat'		=> $alamat,
		
		);

		$this->ModelItem->simpanItem($data);
		$this->session->set_flashdata('message','
		<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		Data Berhasil diinput
		</div>');
		redirect('home');
		
		
		
		
	}
} 