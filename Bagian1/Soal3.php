<!DOCTYPE html>
<html>

<body>

  <?php
  class kendaraan
  {
    public $jenis = "Mobil";
    public $roda = 4;
    public $merk = "Ertiga";
    public $bahanbakar;
    public $harganormal;
    public $tahunpembuatan;
    function harganormal($harganormal)
    {
      return $this->harganormal = $harganormal;
    }
    function tahunpembuatan($tahunpembuatan)
    {
      return $this->tahunpembuatan = $tahunpembuatan;
    }
  }

  $kendaraan = new kendaraan();

  $tahun =  $kendaraan->tahunpembuatan(2009);
  $harga =  $kendaraan->harganormal(10000);
  if ($tahun > 2010) {
    // 80 dapat dari 100 - 20
    $harga_second = $harga * 80 / 100;
    echo $harga_second;
  }
  if ($tahun > 2005 && $tahun < 2010) {
    // 70 dapat dari 100 - 30
    $harga_second = $harga * 70 / 100;
    echo $harga_second;
  }
  if ($tahun < 2005) {
    // 60 dapat dari 100 - 40
    $harga_second = $harga * 60 / 100;
    echo $harga_second;
  }

  ?>

</body>

</html>