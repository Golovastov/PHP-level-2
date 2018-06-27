<?php
// Task 1
  abstract class Product {
    public $price;
    abstract protected function finalPrice();
    function profit() {
      return $profit = $prise - $startingPrice;
    }
  }

  class Physical extends Product {
    public function finalPrice() {
      return $physicalPrice = $this->price;
    }
  }

  class Digital extends Product {
    public function finalPrice() {
      return $this->Price = $physicalPrice / 2;
    }
  }

  class weighted extends Product {
    public $weight;
    public function finalPrice() {
      return $Price = $this->Price * $this->weight;
    }
  }
?>