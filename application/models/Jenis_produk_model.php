<?php
class Jenis_Produk_model extends CI_Model
{
    private $table_jenis_produk = 'jenis_produk';

    public function getAllData()
    {
        // select * from jenis_produk;
        $query = $this->db->get($this->table_jenis_produk);
        return $query->result();
        // $this->db->select('*');
        // $this->db->from('jenis_ jenis_produk');
        // $query = $this->db->get();
        // return $query;
    }

    public function findMasisById($id)
    {
        // select * from jenis_jenis_produk where nim = $id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_jenis_produk);
        return $query->row();
    }

    // public function save($data)
    // {
    //     // INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, ipk)
    //     // VALUES ('0110221004', 'Raghib', 'L', 'Banten', '2001-03-07',' TI', 3.60);
    //     $sql = "INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, ipk) VALUES (?, ?, ?, ?, ?, ?, ?)";
    //     $this->db->query($sql, $data);
    // }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // public function update($data)
    // {
    // // UPDATE data
    // $sql = "UPDATE mahasiswa SET 
    // nim = ?, 
    // nama = ?,
    // gender = ?,
    // tmp_lahir = ?,
    // tgl_lahir = ?,
    // prodi_kode = ?,
    // ipk = ? WHERE nim = ?";
    // $this->db->query($sql, $data);
    // }

    public function delete($id)
    {
        // DELETE FROM mahasiswa WHERE nim = $id;
        $sql = "DELETE FROM jenis_produk WHERE id = ?";
        $this->db->query($sql, array($id));
    }

    public function upload_foto($array)
    {
        $sql = "UPDATE jenis_produk SET foto=? WHERE nama=?";
        $this->db->query($sql, $array);
    }
}