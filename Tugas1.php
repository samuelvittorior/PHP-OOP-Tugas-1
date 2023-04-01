<?php
class Product {
  protected $name,
            $price,
            $discount;
  
  function __construct($name="nama",$price="harga",$discount="diskon") {
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
  
  function __construct($artist="artis",$genre="aliran") {
    $this->artist = $artist;
    $this->genre = $genre;
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
  
}


class CDRack extends Product {
  private $capacity,
          $model;
  
  function __construct($capacity="kapasitas",$model="model",) {
    $this->capacity = $capacity;
    $this->model = $model;
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
  
}
?>  
