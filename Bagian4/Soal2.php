<!DOCTYPE html>
<html>

<body>

  <?php
  class Topi
  {
    protected $model;
    public function setModel($model)
    {
      $this->model = $model;
    }
  }
  class Celana
  {
    protected $tipe;
    protected $model;
    public function setModel($model)
    {
      $this->model = $model;
    }
    public function setTipe($tipe)
    {
      $this->tipe = $tipe;
    }
  }
  class Baju
  {
    protected $tipe;
    public function setTipe($tipe)
    {
      $this->tipe = $tipe;
    }
  }

  class Produk extends Topi
  {
    public function model()
    {
      return "Tipe Topi <i>" . $this->model . "</i>";
    }
  }
  class Produk2 extends Celana
  {
    public function tipe()
    {
      return "Tipe Celana <i>" . $this->tipe . "</i>";
    }
    public function model()
    {
      return "Model Celana <i>" . $this->model . "</i>";
    }
  }
  class Produk3 extends Baju
  {
    public function tipe()
    {
      return "Tipe Baju <i>" . $this->tipe . "</i>";
    }
  }

  $topi = new Produk();
  $Celana = new Produk2();
  $Baju = new Produk3();

  $topi->setModel('Bagus');
  echo $topi->model();
  echo "<br>";

  $Celana->setModel('Celana Bagus');
  $Celana->setTipe('XL');
  echo $Celana->tipe();
  echo "<br>";
  echo $Celana->model();
  echo "<br>";

  $Baju->setTipe('Celana XL');
  echo "<br>";
  echo $Baju->tipe();
  ?>

</body>

</html>