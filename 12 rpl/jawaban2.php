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

}
  $cafekopi = new cafekopi;