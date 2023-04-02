<?php
class Product {
  protected $name,
            $price,
            $discount;
  
  function __construct($name="nama",$price=0,$discount=0) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }  
  public function getPrice() {
    return $this->price;
  }
  public function setPrice($new_price) {
    $this->price = $new_price;
  }
  public function getName() {
    return $this->name;
  }
  public function setName($new_name) {
    $this->name = $new_name;
  }
  public function getDiscount() {
    return $this->discount;
  }
  public function setDiscount($new_discount) {
    $this->discount = $new_discount;
  }
}


class CDMusic extends Product {
  private $artist,
          $genre;
  
  function __construct($name="nama",$price=0,$discount=0,$artist="artis",$genre="aliran") {
    parent::__construct($name,$price,$discount);
    $this->artist = $artist;
    $this->genre = $genre;
    $this->price = $price*1.1;
  }
  public function getArtist() {
    return $this->artist;
  }
  public function setArtist($new_artist) {
    $this->artist = $new_artist;
  }
  public function getGenre() {
    return $this->genre;
  }
  public function setGenre($new_genre) {
    $this->genre = $new_genre;
  }
  public function getPrice() {
    $price = $this->price * (1-($this->discount/100)) * 0.95;
    return $price;
  }
  //Method Tambahan Untuk Menampilkan Info Produk :
  public function infoProduct() {
    echo "Nama : {$this->getName()} <br>";
    echo "Artis : {$this->getArtist()} <br>";
    echo "Aliran : {$this->getGenre()} <br>";
    echo "Harga : Rp " . parent::getPrice() ."<br>";
    echo "Diskon : {$this->getDiscount()}% + 5% <br>";
    echo "Harga Net : Rp {$this->getPrice()} <br>";
  }
}


class CDRack extends Product {
  private $capacity,
          $model;
  
  function __construct($name="nama",$price=0,$discount=0,$capacity="kapasitas",$model="model",) {
    parent::__construct($name,$price,$discount);
    $this->capacity = $capacity;
    $this->model = $model;
    $this->price = $price*1.15;
  }
  public function getCapacity() {
    return $this->capacity;
  }
  public function setCapacity($new_capacity) {
    $this->capacity = $new_capacity;
  }
  public function getModel() {
    return $this->model;
  }
  public function setModel($new_model) {
    $this->model = $new_model;
  }
  public function getPrice() {
    $price = $this->price * (1-($this->discount/100));
    return $price;
  }
  //Method Tambahan Untuk Menampilkan Info Produk :
  public function infoProduct() {
    echo "Nama : {$this->getName()} <br>";
    echo "Kapasitas : {$this->getCapacity()} <br>";
    echo "Model : {$this->getModel()} <br>";
    echo "Harga : Rp " . parent::getPrice() ."<br>";
    echo "Diskon : {$this->getDiscount()}% <br>";
    echo "Harga Net : Rp {$this->getPrice()} <br>";
  }
}

$Produk1 = new CDMusic("Koleksi Terlengkap Ebiet G. Ade",100000,5,"Ebiet G. Ade","Pop");
$Produk2 = new CDMusic("Michael Learns To Rock The Greatest Hits",200000,15,"Michael Learns To Rock","Slow Rock");
$Produk3 = new CDMusic("Now Forever Mayumi Itsuwa Best Collection",150000,10,"Mayumi Itsuwa","Pop");
$Produk4 = new CDRack("Memphis Stackable CD Rack, White",500000,10,40,"Stackable Rack");
$Produk5 = new CDRack("CD Cabinet With 2 Trays",1500000,5,150,"Wall Cabinet");

// untuk mengganti info produk :
$Produk1->setGenre("Country");

//tampilkan semua info produk :
echo "Info Produk 1 : <br> ";
$Produk1->infoProduct();
echo "<hr>";
echo "Info Produk 2 : <br> ";
$Produk2->infoProduct();
echo "<hr>";
echo "Info Produk 3 : <br> ";
$Produk3->infoProduct();
echo "<hr>";
echo "Info Produk 4 : <br> ";
$Produk4->infoProduct();
echo "<hr>";
echo "Info Produk 5 : <br> ";
$Produk5->infoProduct();
echo "<hr>";

?>  
