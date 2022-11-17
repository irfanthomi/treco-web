<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Link_ex_model extends CI_Model
{

    public $table = 'link_ex';
    public $id = 'id_link';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_link,link,judul,isi,posisi');
        $this->datatables->from('link_ex');
        //add this line for join
        //$this->datatables->join('table2', 'link_ex.field = table2.field');
        $this->datatables->where('posisi','home');
        $this->datatables->add_column('action', anchor(base_url('link_ex/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(base_url('link_ex/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_link');
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
        $this->db->like('id_link', $q);
    $this->db->or_like('link', $q);
    $this->db->or_like('judul', $q);
    $this->db->or_like('isi', $q);
    $this->db->or_like('posisi', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_link', $q);
    $this->db->or_like('link', $q);
    $this->db->or_like('judul', $q);
    $this->db->or_like('isi', $q);
    $this->db->or_like('posisi', $q);
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

 