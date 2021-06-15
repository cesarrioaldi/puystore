<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelItem extends CI_Model
{
    //manajemen buku
    public function getItem()
    {
        return $this->db->get('item');
    }

    public function itemWhere($where)
    {
        return $this->db->get_where('item', $where);
    }

    public function simpanItem($data = null)
    {
        $this->db->insert('item',$data);
    }

    public function updateItem($data = null, $where = null)
    {
        $this->db->update('item', $data, $where);
    }

    public function hapusItem($where = null)
    {
        $this->db->delete('item', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('item');
        return $this->db->get()->row($field);
    }
    
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategoriItem($where)
    {
        $this->db->select('item.kategori,kategori.kategori');
        $this->db->from('item');
        $this->db->join('kategori','kategori.id = item.kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}