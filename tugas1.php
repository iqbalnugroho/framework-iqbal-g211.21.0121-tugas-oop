<?php

   class product {
    // property product
     private $name = "Mie Sedap Goreng <br/>";
     public $price;
     public $discount;

    // method product
     function getPrice() {
        
     }
     
     function setPrice() {
        return "3000 <br/>";
     }

     function getName() {

     }

     function setName() {
        return "Nama Produk : " .$this->name;
     }

     function getDiscount() {

     }

     function setDiscount() {
        return "Beli 10 Gratis 1 <br/><br>";
     }

     function Hubungan($product) {
        $this->kunci=$product;
     }

     function Hubungan2($product) {
        $this->luct=$product;
     }
     
   }

    // instansiasi class product
    $product = new product();

    // memanggil method setName dari class product
    echo $product->setName();

    // memanggil method setPrice dari class product
    echo $product->setPrice();

    // memanggil method setDiscount dari class product
    echo $product->setDiscount();



   class CDMusic extends product {
    // property CDMusic
     public $artist;
     public $genre;
     
    // method pada CDMusic
     function getArtist() {

     }

     function setArtist($CDMusic) {
        $this->artist=$CDMusic;
     }

     function getGenre() {

     }

     function setGenre($CDMusic) {
        $this->genre=$CDMusic;
     }
   }

    // instansiasi class CDMusic
    $CDMusic = new CDMusic;

    // method Hubungan adalah method pada class product, tapi kita bisa mengaksesnya karena telah menghubungkan class CDMusic dengan class product
    $CDMusic->Hubungan("Seblak Bakso");
    $CDMusic->setArtist("Aura Kasih");
    $CDMusic->setGenre("Pop <br/>");

    // menampilkan isi property
    echo "Nama Produk : " . $CDMusic->kunci . "<br/>";
    echo "Nama Artis : " .$CDMusic->artist . "<br/>";
    echo "Genre : " .$CDMusic->genre . "<br/>";


   class CDRack extends product {
    // property pada CDRack
     public $capacity;
     public $model;

    // method pada CDRack
     function getCapacity() {

     }

     function setCapacity($CDRack) {
        $this->capacity=$CDRack;
     }

     function getModel() {

     }

     function setModel($CDRack) {
        $this->model=$CDRack;
     }
   }
    // instansiasi class CDRack
     $CDRack = new CDRack;

    // method Hubungan2 adalah method pada class product, tapi kita bisa mengaksesnya karena telah menghubungkan class CDRack dengan class product
    $CDRack->Hubungan2("Pengen Full Offline");
    $CDRack->setCapacity("Ada 10 Kapasitas Rack");
    $CDRack->setModel("Model Kotak-Kotak");

    // menampilkan isi property
    echo "Pesan : " . $CDRack->luct . "<br/>";
    echo "Kapasitas : " .$CDRack->capacity . "<br/>";
    echo "Bentuk : " .$CDRack->model . "<br/>";

?>