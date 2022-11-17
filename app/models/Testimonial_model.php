<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimonial_model extends CI_Model
{

    public $table = 'testimonial';
    public $id = 'id_testimonial';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_testimonial,isi,nama,keterangan,gambar,tanggal');
        $this->datatables->from('testimonial');
        //add this line for join
        //$this->datatables->join('table2', 'testimonial.field = table2.field');
        $this->datatables->add_column('gambar_tampil','<img src="'.base_url('rn/gambar_tes/$1').'" class="img-responsive" style="width: 100px">','gambar'); 
        $this->datatables->add_column('action', anchor(base_url('testimonial/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(base_url('testimonial/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_testimonial');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_testimonial', $q);
	$this->db->or_like('isi', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('gambar', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_testimonial', $q);
	$this->db->or_like('isi', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('gambar', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

 