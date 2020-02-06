<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mdashboard extends CI_Model {


  public function getdok()
    {
      $query = $this->db->query("SELECT *  from dokumen order by kode_dokumen desc");
      return $query->result_array();
    }

    public function getkwi()
    {
      $query = $this->db->query("SELECT *  from kwitansi order by tanggal_kwitansi desc");
      return $query->result_array();
    }

    public function getkep()
    {
      $query = $this->db->query("SELECT *  from keperluan order by kode_keperluan desc");
      return $query->result_array();
    }

    public function getsisakas()
    {
      $query = $this->db->query("SELECT (SELECT saldo from saldo) as saldo,(
      (SELECT saldo from saldo)- sum(kredit)) as sisakasreal
    FROM
      keperluan p
      JOIN kwitansi k ON p.kode_kwitansi = k.kode_kwitansi 
    WHERE
      k.`status` = 'Aktif'");
      return $query->result_array();
    }


    public function getuser()
    {
      $query = $this->db->query("SELECT *  from user order by level asc");
      return $query->result_array();
    }

}
