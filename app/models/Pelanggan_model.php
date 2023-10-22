<?php 

class Pelanggan_model {
    private $table = 'pelanggan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPelanggan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPelangganById($IdPelanggan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdPelanggan=:IdPelanggan');
        $this->db->bind('IdPelanggan', $IdPelanggan);
        return $this->db->single();
    }

    public function tambahDataPelanggan($data)
    {
        $query = "INSERT INTO pelanggan
                    VALUES
                  (null,:NamaPelanggan, :NoTelp,null)";
        
        $this->db->query($query);
        $this->db->bind('NamaPelanggan', $data['NamaPelanggan']);
        $this->db->bind('NoTelp', $data['NoTelp']);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPelanggan($IdPelanggan)
    {
        $query = "DELETE FROM pelanggan WHERE IdPelanggan = :IdPelanggan";
        
        $this->db->query($query);
        $this->db->bind('IdPelanggan', $IdPelanggan);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPelanggan($data)
    {
        $query = "UPDATE pelanggan SET
                    NamaPelanggan = :NamaPelanggan,
                    NoTelp = :NoTelp
                  WHERE IdPelanggan = :IdPelanggan";
        
        $this->db->query($query);
        $this->db->bind('NamaPelanggan', $data['NamaPelanggan']);
        $this->db->bind('NoTelp', $data['NoTelp']);
        $this->db->bind('IdPelanggan', $data['IdPelanggan']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}