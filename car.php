<?php

    class Car
    {
        private $make;
        private $price;
        private $year;
        private $img;
        private $mileage;

        function __construct($make, $price, $year, $img, $max_mileage)
        {
            $this->make = $make;
            $this->price = $price;
            $this->year = $year;
            $this->img = $img;
            $this->max_mileage = $max_mileage;
        }

        function getMake()
        {
            return $this->make;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getYear()
        {
            return $this->year;
        }
        function getImg()
        {
            return $this->img;
        }

        function setMake($new_make)
        {
            $this->make = $new_make;
        }

        function setYear($new_year)
        {
            $this->year= $new_year;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }
        function setImg($new_img)
        {
            $this->img = $new_img;
        }

    }

    $car1 = new Car("Honda Civic", 2000, 1980, "img/honda.jpg");
    $car2 = new Car("Volks Beetle", 1999, 1980, "img/bug.jpg");

    $cars=array($car1, $car2);




?>

<!DOCTYPE html>
<html>
<head>
    <title>Objects</title>
</head>
    <body>
        <h1>Objects</h1>

<?php

        $max_price = $_GET["max_price"];
        $max_mileage = $_GET["mileage"];

        foreach ($cars as $car)
            {
                $carimg = $car->getImg();
                echo $car->getMake();
                echo $car->getPrice();
                $car->setMake($_GET["make"]);
                $car->setPrice($_GET["price"]);







                echo "<img src =$carimg>";


            }
?>

    </body>
</html>
