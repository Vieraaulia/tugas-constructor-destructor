<?php
// buat class cafekopi
class cafekopi {
  
   public $makanan = "gorengan";
   public $minuman = "tea jus";
   public $transaksi = "5000";
  
   public function tampilkan_cafekopi(){
     echo "makanan : $this->makanan, minuman : $this->minuman, transaksi : $this->transaksi";
  }
  
  public function __construct(){
    echo "Ini berasal dari Constructor cafekopi";
  }
  public function __destruct(){
    echo "Ini berasal dari Destructor cafekopi";
  }

}
  $cafekopi = new cafekopi;
  echo"<br/>";
  $cafekopi->tampilkan_cafekopi();
  echo"<br/>";