<?php
class Suplier_model extends CI_Model
{
    private $table_suplier = 'suplier';

    public function getAllData()
    {
        // select * from suplier;
        $query = $this->db->get($this->table_suplier);
        return $query->result();
        // $this->db->select('*');
        // $this->db->from('suplier');
        // $query = $this->db->get();
        // return $query;
    }

    public function findMasisById($id)
    {
        // select * from suplier where nim = $id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_suplier);
        return $query->row();
    }

    // public function save($data)
    // {
    //     // INSERT INTO suplier (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_nama, ipk)
    //     // VALUES ('0110221004', 'Raghib', 'L', 'Banten', '2001-03-07',' TI', 3.60);
    //     $sql = "INSERT INTO suplier (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_nama, ipk) VALUES (?, ?, ?, ?, ?, ?, ?)";
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
    // $sql = "UPDATE suplier SET 
    // nim = ?, 
    // nama = ?,
    // gender = ?,
    // tmp_lahir = ?,
    // tgl_lahir = ?,
    // prodi_nama = ?,
    // ipk = ? WHERE nim = ?";
    // $this->db->query($sql, $data);
    // }

    public function delete($id)
    {
        // DELETE FROM suplier WHERE nim = $id;
        $sql = "DELETE FROM Suplier WHERE id = ?";
        $this->db->query($sql, array($id));
    }
}