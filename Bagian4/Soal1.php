<!DOCTYPE html>
<html>

<body>

  <?php
  class mobiLengkap
  {
    private $model;
    public function setModel($model)
    {
      $this->model = $model;
    }
    public function nontonTV()
    {
      return  $this->model;
    }
  }

  class MobilBMW extends mobiLengkap
  {
  }
  $sportsCar1 = new mobiLengkap();
  $sportsCar1->setModel('Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar');
  echo $sportsCar1->nontonTV();
  echo "<br>";


  class MobilBMWberaksi
  {
    public function nontonTV()
    {
      return  "Nonton TV";
    }
    public function HidupkanMobil()
    {
      return "Hidupkan Mobil";
    }
    public function MatikanMobil()
    {
      return  "Matikan Mobil";
    }
    public function ubahGigi()
    {
      return  "Ubah Gigi";
    }
  }
  class MobilBMWberaksi2 extends MobilBMWberaksi
  {
  }

  $bmwberaksi = new MobilBMWberaksi();
  echo $bmwberaksi->nontonTV();
  echo "<br>";
  echo $bmwberaksi->HidupkanMobil();
  echo "<br>";
  echo $bmwberaksi->MatikanMobil();
  echo "<br>";
  echo $bmwberaksi->ubahGigi();
  ?>

</body>

</html>