<?php 

class Pengguna_model {
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenggunaById($IdPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdPengguna=:IdPengguna');
        $this->db->bind('IdPengguna', $IdPengguna);
        return $this->db->single();
    }

    public function tambahDataPengguna($data)
    {
        $query = "INSERT INTO pengguna
                    VALUES
                  (null,:NamaPengguna,null, :NamaDepan,:NamaBelakang,:NoHp,:Alamat,null)";
        
        $this->db->query($query);
        $this->db->bind('NamaPengguna', $data['NamaPengguna']);
        $this->db->bind('NamaDepan', $data['NamaDepan']);
        $this->db->bind('NamaBelakang', $data['NamaBelakang']);
        $this->db->bind('NoHp', $data['NoHp']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('Keterangan', $data['Keterangan']);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPengguna($IdPengguna)
    {
        $query = "DELETE FROM pengguna WHERE IdPengguna = :IdPengguna";
        
        $this->db->query($query);
        $this->db->bind('IdPengguna', $IdPengguna);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPengguna($data)
    {
        $query = "UPDATE pengguna SET
                    NamaPengguna = :NamaPengguna,
                    NamaDepan = :NamaDepan,
                    NamaBelakang = :NamaBelakang,
                    NoHp = :NoHp,
                    Alamat = :Alamat
                  WHERE IdPengguna = :IdPengguna";
        
        $this->db->query($query);
        $this->db->bind('NamaPengguna', $data['NamaPengguna']);
        $this->db->bind('NamaDepan', $data['NamaDepan']);
        $this->db->bind('NamaBelakang', $data['NamaBelakang']);
        $this->db->bind('NoHp', $data['NoHp']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}