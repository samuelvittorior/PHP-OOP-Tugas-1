<?php
class Product {
  protected $name;
  protected $price;
  protected $discount;
  
  function __construct($name,$price,$discount) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }  
  public function getPrice() {
    return $this->price;
  }
  public function setPrice($new_price) {
    $this->price = $new_price
  }
  public function getName() {
    return $this->name;
  }
  public function setPrice($new_name) {
    $this->price = $new_name
  }
  public function getDiscount() {
    return $this->discount;
  }
  public function setDiscount($new_discount) {
    $this->price = $new_discount
  }
}


class CDMusic extends Product

?>  
