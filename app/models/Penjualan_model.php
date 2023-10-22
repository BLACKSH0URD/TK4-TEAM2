<?php 

class Penjualan_model {
    private $table = 'penjualan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenjualanById($IdPenjualan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdPenjualan=:IdPenjualan');
        $this->db->bind('IdPenjualan', $IdPenjualan);
        return $this->db->single();
    }

    public function tambahDataPenjualan($data)
    {
        $query = "INSERT INTO penjualan
                    VALUES
                  (null,:JumlahPenjualan, :HargaJual)";
        
        $this->db->query($query);
        $this->db->bind('JumlahPenjualan', $data['JumlahPenjualan']);
        $this->db->bind('HargaJual', $data['HargaJual']);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPenjualan($IdPenjualan)
    {
        $query = "DELETE FROM penjualan WHERE IdPenjualan = :IdPenjualan";
        
        $this->db->query($query);
        $this->db->bind('IdPenjualan', $IdPenjualan);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPenjualan($data)
    {
        $query = "UPDATE penjualan SET
                    JumlahPenjualan = :JumlahPenjualan,
                    HargaJual = :HargaJual
                  WHERE IdPenjualan = :IdPenjualan";
        
        $this->db->query($query);
        $this->db->bind('JumlahPenjualan', $data['JumlahPenjualan']);
        $this->db->bind('HargaJual', $data['HargaJual']);
        $this->db->bind('IdPenjualan', $data['IdPenjualan']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}