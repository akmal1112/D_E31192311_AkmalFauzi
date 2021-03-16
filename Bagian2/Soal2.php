<!DOCTYPE html>
<html>

<body>

  <?php
  class laptop
  {
    public $pemilik;
    public $merk;
    public function hidupkan_laptop($merk, $pemilik)
    {
      return "Hidupkan Laptop " . $merk . " punya " . $pemilik;
    }
    public function matikan_laptop($merk, $pemilik)
    {
      return "Matikan Laptop " . $merk . " punya " . $pemilik;
    }
    public function restart_laptop($merk, $pemilik)
    {
      return "Matikan Laptop " . $merk . " punya " . $pemilik . "<br>" . "Hidupkan Laptop " . $merk . " punya " . $pemilik;
    }
  }

  $laptop = new laptop();
  $a = $laptop->hidupkan_laptop("Hp", "A");
  $b = $laptop->matikan_laptop("Toshiba", "B");
  $c = $laptop->restart_laptop("Lenovo", "C");
  echo $a;
  echo "<br>";
  echo $b;
  echo "<br>";
  echo $c;
  ?>

</body>

</html>