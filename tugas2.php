<?php 

  class hewan {
    //property produk
    var $monyet;

    // method monyet
    function berjalan() {
        return "Monyet bisa berjalan <br/>";
    }

    function makan() {
        return "Monyet juga bisa makan seperti manuasia <br/>";
    }

    function bersuara() {
        return "Monyet bisa bersuara <br/>";
    }
  }
    // instansiasi class product
     $hewan = new hewan();

    // memanggil method berjalan dari class monyet
     echo $hewan->berjalan();

    // memanggil method berjalan dari class monyet
    echo $hewan->bersuara();

    // memanggil method berjalan dari class monyet
    echo $hewan->makan();