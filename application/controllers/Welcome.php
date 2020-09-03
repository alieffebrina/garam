<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	 public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Setting');
        // $this->load->model('M_barang');
        // $this->load->model('M_pelanggan');
        // $this->load->model('M_penjualan');
        // $this->load->model('M_stok');
    }

	public function index()
	{
		$this->load->view('template/header.php');
		$id = $this->session->userdata('tipeuser');
        $data['menu'] = $this->M_Setting->getmenu1($id);
		$this->load->view('template/sidebar.php', $data);
		// $data['barang'] = $this->M_barang->totalitem();
		// $data['datapelanggan'] = $this->M_pelanggan->datapelanggan();
		// $data['totalpenjualan'] = $this->M_penjualan->datapenjualan();
		// $data['penjualan1'] = $this->M_penjualan->penjualan1();
		// $data['penjualan2'] = $this->M_penjualan->penjualan2();
		// $data['penjualan3'] = $this->M_penjualan->penjualan3();
		// $data['penjualan4'] = $this->M_penjualan->penjualan4();
		// $data['penjualan5'] = $this->M_penjualan->penjualan5();
		// $data['stokdashboard'] = $this->M_stok->stokdashboard();
		// $data['hutangdashboard'] = $this->M_penjualan->hutangdashboard();
		$this->load->view('template/index.php', $data);
		$this->load->view('template/footer.php');
	}
}
