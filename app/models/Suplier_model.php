<?php 

class Suplier_model {
    private $table = 'suplier';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSuplier()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSuplierById($IdSuplier)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdSuplier=:IdSuplier');
        $this->db->bind('IdSuplier', $IdSuplier);
        return $this->db->single();
    }

    public function tambahDataSuplier($data)
    {
        $query = "INSERT INTO suplier
                    VALUES
                  (null,:NamaSuplier, :Alamat,null)";
        
        $this->db->query($query);
        $this->db->bind('NamaSuplier', $data['NamaSuplier']);
        $this->db->bind('Alamat', $data['Alamat']);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataSuplier($IdSuplier)
    {
        $query = "DELETE FROM suplier WHERE IdSuplier = :IdSuplier";
        
        $this->db->query($query);
        $this->db->bind('IdSuplier', $IdSuplier);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataSuplier($data)
    {
        $query = "UPDATE suplier SET
                    NamaSuplier = :NamaSuplier,
                    Alamat = :Alamat
                  WHERE IdSuplier = :IdSuplier";
        
        $this->db->query($query);
        $this->db->bind('NamaSuplier', $data['NamaSuplier']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('IdSuplier', $data['IdSuplier']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}