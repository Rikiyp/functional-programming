<?php
class Pasien_model 
{
  private $table = "pasien";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPasien()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function tambahDataPasien($data){
    $query = "INSERT INTO pasien
                VALUES
            ('', :nama, :jenis_kelamin, :Tanggal_Lahir, :Alamat, :Poli, :Status)";
    
    $this->db->query($query);
    $this->db->bind("nama", $data["nama"]);
    $this->db->bind("jenis_kelamin", $data["jenis_kelamin"]);
    $this->db->bind("Tanggal_Lahir", $data["Tanggal_Lahir"]);
    $this->db->bind("Alamat", $data["Alamat"]);
    $this->db->bind("Poli", $data["Poli"]);
    $this->db->bind("Status", $data["Status"]);

    $this->db->execute();
    return $this->db->rowCount();

  }
}

