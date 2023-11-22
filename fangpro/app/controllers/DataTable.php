<?php

class DataTable extends Controller {
  public function index()
  {
    $data["judul"] = "Data Pasien";
    $data["psn"] = $this->model("Pasien_model")->getAllPasien();
    $this->view("templates/header", $data);
    $this->view("DataTable/index", $data);
    $this->view("templates/footer");
  }

  public function tambahPasien()
  {
    if ($this->model("Pasien_model")->tambahDataPasien($_POST) > 0){
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/DataTable");
      exit;
    } else{
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/DataTable");
      exit;
    }
  }
}