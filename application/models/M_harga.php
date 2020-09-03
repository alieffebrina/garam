<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_harga extends CI_Model {

	// function getharga(){
	// 	$this->db->select('tb_harga.*, tb_barang.*');
 //        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_harga.id_barang');
 //        $query = $this->db->get('tb_harga');
 //    	return $query->result();
 //    }

    function getharga(){
        $this->db->select('*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_harga.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori');
        $query = $this->db->get('tb_harga');
        return $query->result();
    }

    // function getnama($ida){
    //     $where = array(
    //         'id_harga' => $ida
    //     );
    //     return $this->db->get_where('tb_harga',$where)->result();
    // }

    function tambahdata($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);

        $harga = array(
            
            'id_barang' => $this->input->post('barang'),
            //'id_barang' => $this->input->post('id_barang'),
            'harga' => $harga_str,
            'minqtt' => $this->input->post('minqtt'),
            'id_user' => $id,
            'tglupdate' => date('Y-m-d')
        );
        
        $this->db->insert('tb_harga', $harga);
    }

    function cekkodeharga(){
        $this->db->select_max('id_harga');
        $idharga = $this->db->get('tb_harga');
        return $idharga->row();
    }

    //function tambahakses($id){
    //    $total = $this->db->count_all_results('tb_submenu');

    //    for($i=0; $i<$total; $i++){
    //        $fungsi = array('id_submenu' => $i+1 , 
    //            'id_user' => $id);

    //        $this->db->insert('tb_akses', $fungsi);            
    //    }
    //}

    // function getspek($iduser){
    //     $this->db->select('tb_harga.*, tb_barang.*');
    //     $this->db->join('tb_barang', 'tb_barang.id_barang = tb_harga.id_barang');
    //     $where = array(
    //         'id_harga' => $iduser
    //     );
    //     $query = $this->db->get_where('tb_harga', $where);
    // 	return $query->result();
    // }

     function getspek($iduser){
       $this->db->select('*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_harga.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori');
        $where = array(
            'id_harga' => $iduser
        );
        $query = $this->db->get_where('tb_harga', $where);
        return $query->result();
    }

    function edit($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);

        $harga = array(
            //'id_barang' => $this->input->post('barang'),
            'id_barang' => $this->input->post('barang'),
            'harga' => $harga_str,
            'minqtt' => $this->input->post('minqtt'),
            'id_user' => $id,
            'tglupdate' => date('Y-m-d')
        );

        $where = array(
            'id_harga' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_harga',$harga);
    }

    
}