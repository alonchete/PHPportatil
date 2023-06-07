<?php
namespace BD;

class DBconnection
{

   public function connection(){
      $data = file_get_contents('../config/config.json');
      $products = json_decode($data, true);      
      $conn = mysqli_connect($products["servername"], $products["user"], $products["pass"],
      $products["database"]);
      mysqli_set_charset($conn , "uft8");
      return $conn;
   }

}



?>