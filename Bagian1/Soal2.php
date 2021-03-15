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
    public $harga;
    public $tahunpembuatan;
    function tahunpembuatan($tahunpembuatan)
    {
      return $this->tahunpembuatan = $tahunpembuatan;
    }
    function bahanbakar($bahanbakar)
    {
      return $this->bahanbakar = $bahanbakar;
    }
  }

  $kendaraan = new kendaraan();

  $th =  $kendaraan->tahunpembuatan(2004);
  $bahanbakar =  $kendaraan->bahanbakar("Premium");
  if ($bahanbakar != "Premium") {
    echo "Maaf Hanya Bahan Bakar Premium Gan";
  } else {
    if ($th < 2005) {
      echo "Mendapatkan Subsidi";
    } else {
      echo "Tidak Dapat Subsidi";
    }
  }

  ?>

</body>

</html>