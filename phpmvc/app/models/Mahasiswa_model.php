<?php

class Mahasiswa_model 
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // get all data
    public function all()
    {
        $this->db->query("SELECT * FROM $this->table");
        $this->db->execute();
        return $this->db->resultSet();
    }

    // get single data based on id
    public function find($id)
    {
        $query = "SELECT * FROM $this->table WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->single();
    }

    // buat data mahasiswa baru
    public function create($data)
    {
        $query = "INSERT INTO $this->table (nama, nim) VALUES (:nama, :nim)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // delete data mahsiswa
    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // update data
    public function update($data)
    {
        $query = "UPDATE $this->table SET nama = :nama, nim = :nim WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}