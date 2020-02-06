<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mcetak extends CI_Model {

 		public function getdok($id)
{
  $query = $this->db->query("select * from dokumen where id ='$id'");
 return $query->result_array();
}

    public function getkantor($id)
{
  $query = $this->db->query("SELECT
	kw.kode_kwitansi,
	tanggal_kwitansi,
	kp.nama_keperluan,
	qty,
	kredit 
FROM
	keperluan kp
	JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi 
  Join dokumen d on d.kode_dokumen = kw.kode_dokumen
WHERE
	kw.statuskas = 'Kantor' 
	AND d.id = '$id'");
 return $query->result_array();
}

public function getmesskantor($id)
{
  $query = $this->db->query("select tb.id, sum(kredit) as mess1 FROM (
		SELECT
			d.id,
			kw.kode_kwitansi,
			tanggal_kwitansi,
			kp.nama_keperluan,
			qty,
			kredit,
			statusuang
		FROM
			keperluan kp
			JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi join dokumen d on d.kode_dokumen = kw.kode_dokumen
		WHERE
			d.id = '$id' 
			AND kw.statuskas = 'Mess' AND kp.statusuang='UangKantor') tb");
 return $query->result_array();
}

public function getmessbapak($id)
{
  $query = $this->db->query("SELECT
	d.id,
	kw.kode_kwitansi,
	tanggal_kwitansi,
	kp.nama_keperluan,
	qty,
	kredit,
	statusuang
FROM
	keperluan kp
	JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi join dokumen d on d.kode_dokumen = kw.kode_dokumen
WHERE
	d.id = '$id' 
	AND kw.statuskas = 'Mess' AND kp.statusuang='UangBapak'");
 return $query->result_array();
}


public function getmess($id)
{
  $query = $this->db->query("SELECT
	d.id,
	kw.kode_kwitansi,
	tanggal_kwitansi,
	kp.nama_keperluan,
	qty,
	kredit,
	statusuang
FROM
	keperluan kp
	JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi join dokumen d on d.kode_dokumen = kw.kode_dokumen
WHERE
	d.id = '$id' 
	AND kw.statuskas = 'Mess'");
 return $query->result_array();
}

public function gettotaltf($id)
{
  $query = $this->db->query("SELECT
	tb.id,
	tb.totaltf 
FROM
	(
SELECT
	d.id,
	sum( kredit ) AS totaltf 
FROM
	keperluan kp
	JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi
	JOIN dokumen d ON d.kode_dokumen = kw.kode_dokumen 
WHERE
	d.id = ( SELECT max( d.id ) FROM dokumen d WHERE d.id < $id ) 
	) tb");
 return $query->result_array();
}

public function getsisakas($id)
{
  $query = $this->db->query("SELECT
	tb.id,tb.tanggal_dokumen as tanggalsebelum,
	tb.sisakas 
FROM
	(
SELECT
	d.id,tanggal_dokumen,
	2085407- sum( kredit ) AS sisakas 
FROM
	keperluan kp
	JOIN kwitansi kw ON kw.kode_kwitansi = kp.kode_kwitansi
	JOIN dokumen d ON d.kode_dokumen = kw.kode_dokumen 
WHERE
	d.id = ( SELECT max( d.id ) FROM dokumen d WHERE d.id < $id ) 
	AND statusuang = 'UangKantor' 
	) tb");
 return $query->result_array();
}

}
