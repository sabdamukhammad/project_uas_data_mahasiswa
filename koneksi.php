<?php
class Koneksi{
  private $server="localhost";
  private $username="id4973034_sabdamukh";
  private $password = "23yoong23";
  private $db = "id4973034_dev1";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
