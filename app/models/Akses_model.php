<?php 

class Akses_model {
    private $table = 'hakakses';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAkses()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAksesById($IdAkses)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdAkses=:IdAkses');
        $this->db->bind('IdAkses', $IdAkses);
        return $this->db->single();
    }

    public function tambahDataAkses($data)
    {
        $query = "INSERT INTO hakakses (NamaAkses, Keterangan) VALUES (:NamaAkses, :Keterangan)";
        
        $this->db->query($query);
        $this->db->bind('NamaAkses', $data['NamaAkses']);
        $this->db->bind('Keterangan', $data['Keterangan']);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataAkses($IdAkses)
    {
        $query = "DELETE FROM hakakses WHERE IdAkses = :IdAkses";
        
        $this->db->query($query);
        $this->db->bind('IdAkses', $IdAkses);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataAkses($data)
    {
        $query = "UPDATE hakakses SET
                    NamaAkses = :NamaAkses,
                    Keterangan = :Keterangan
                  WHERE IdAkses = :IdAkses";
        
        $this->db->query($query);
        $this->db->bind('NamaAkses', $data['NamaAkses']);
        $this->db->bind('Keterangan', $data['Keterangan']);
        $this->db->bind('IdAkses', $data['IdAkses']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}