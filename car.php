<?php

    class Car
    {
        private $make;
        private $price;
        private $year;
        private $img;

        function __construct($make, $price, $year, $img)
        {
            $this->make = $make;
            $this->price = $price;
            $this->year = $year;
            $this->img = $img;
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
    $car2 = new Car("Volks Beetle", 1999, 1980, "img/honda.jpg");

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
        foreach ($cars as $car)
            {
                echo $car1->getMake();
                echo $car1->getPrice();
                $car1->setMake("BMW");
                echo $car1->getMake();
                echo "<img src =" . $car1->getImg() . ">";


            }
?>

    </body>
</html>
