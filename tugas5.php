<?php
// nama:siti nur rohmatul ummah
// NPM : 21081010272
class Product 
{
    public $name;
    public $price;
    public $discount;

    public function __construct($name, $price, $discount){
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setPrice ($price) {
        $this->price = $price;
        return $price;
    }

    public function getName () {
        return $this->name;
    }

    public function setName ($name) {
        $this->name = $name;
        return $name;
    }

    public function getDiscount () {
        return $this->discount;
    }

    public function setDiscount ($diskon) {
        $this->discount = $diskon;
        return $diskon;
    }
}
class CDMusic extends Product
{
    public $artist = "artis", $genre = "genre";

    public function __construct($name, $price, $discount) {
        parent::__construct($name, $price, $discount);
    }

    public function getArtist () {
        return $this->artist;
    }
    
    public function setArtist ($artis) {
        $this->artist = $artis;
        return $artis;
    }

    public function getGenre () {
        return $this->genre;
    }

    public function setGenre ($Genre) {
        $this->genre = $Genre;
        return $Genre;
    }

    public function setPrice ($price) {
        parent::setPrice($price * 1);
    }

    public function setDiscount ($discount) {
        parent::setDiscount($discount + 5);
    }
}
class CDRack extends Product
{
    public $capacity = "kapasitas", $model = "model";

    public function __construct($name, $price, $discount) {
        parent::__construct($name, $price, $discount);
    }

    public function getCapacity () {
        return $this->capacity;
    }

    public function setCapacity ($kapasitas) {
        $this->capacity = $kapasitas;
        return $kapasitas;
    }

    public function getModel () {
        return $this->model;
    }

    public function setModel ($models) {
        $this->model = $models;
        return $models;
    }

    public function setPrice($price) {
        parent::setPrice($price * 1);
    }
}
$produk = new Product("Music",700000,20);
echo "Product Information :" . "<br>";
echo "Name: " . $produk->getName() . "<br>";
echo "Price: " . $produk->getPrice() . "<br>";
echo "Discount: " . $produk->getDiscount() . "%";
echo "<br>";

echo "<br>";

$CDMusic = new CDMusic ("KPOP", 350000, 10);
    $CDMusic->setPrice(350000);
    $CDMusic->setDiscount(10);
    $CDMusic->setArtist("BTS");
    $CDMusic->setGenre("Kpop");

    echo "Detail CD Music: "."<br>";
    echo "Name : ".$CDMusic->getName()."<br>";
    echo "Harga : Rp.".$CDMusic->getPrice()."<br>";
    echo "Artist : ".$CDMusic->getArtist()."<br>";
    echo "Genre : ".$CDMusic->getGenre()."<br>";
    echo "Diskon yang Berlaku : ".$CDMusic->getDiscount()."%";
    echo "<br>";

    echo "<br>";

    $CDRack = new CDRack ("Asus", 700000, 15);
    $CDRack->setPrice(700000);
    $CDRack->setDiscount(15);
    $CDRack->setCapacity("100");
    $CDRack->setModel("Solid State Drive 5");

    echo "Detail CD Rack : "."<br>";
    echo "Name : ".$CDRack->getName()."<br>";
    echo "Harga : Rp.".$CDRack->getPrice()."<br>";
    echo "Kapasitas : ".$CDRack->getCapacity()." GB";
    echo "<br>";
    echo "Model : ".$CDRack->getModel()."<br>";
    echo "Diskon Berlaku : ".$CDRack->getDiscount()."%";
    echo "<br>";
?>