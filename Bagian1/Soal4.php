<!DOCTYPE html>
<html>

<body>

  <?php
  class Mebel
  {
    public $jenis;
    public $promo;
    public $type;
    public $harganormal;
    public $tahunbuat;
    function harganormal($harganormal)
    {
      return $this->harganormal = $harganormal;
    }
    function promo($promo)
    {
      return $this->promo = $promo;
    }
    function tahunbuat($tahunbuat)
    //$tahun bangun adalah parameter
    {
      return $this->tahunbuat = $tahunbuat;
    }
  }

  $Mebel = new Mebel();

  $tahun =  $Mebel->tahunbuat(2006);
  $harga =  $Mebel->harganormal(10000);
  $promo =  $Mebel->promo(10);
  if ($tahun > 2010) {
    if ($promo != 0) {
      echo "Bangunan Baru";
      echo "<br>";
      echo "======";
      $price = $harga * $promo / 100;
      echo "<br>";
      echo "diskon :", $price;
      echo "<br>";
      $total_harga=$harga-$price;
      echo $total_harga;

    } else {
      echo "Bangunan Baru";
      echo "Tidak Ada Promo";
    }
  } else {
    if ($promo) {
      echo "Bangunan Lama";
      echo "<br>";
      echo "======";
      $price = $harga * $promo / 100;
      echo "<br>";
      echo "diskon :", $price;
      echo "<br>";
      $prise = $harga-$price;
      echo $price;
    } else {
      echo "Bangunan Lama";
      echo "<br>";
      echo "Tidak Ada Promo";
      echo "Harga :", $harga;
    }
  }


  ?>

</body>

</html>