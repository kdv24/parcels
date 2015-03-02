<?php

    class Car
    {
        private $make;
        private $price;
        private $year;

        function __construct($make, $price, $year)
        {
            $this->make = $make;
            $this->price = $price;
            $this->year = $year;
        }

        function getMake()
        {
            return $this->make;
        }
        function getPrice()
        {
            return $this->price;
        }
        function setMake($new_make)
        {
            $this->make = $new_make;
        }

        function getYear()
        {
            return $this->year;
        }

        function setYear($new_year)
        {
            $this->year= $new_year;
        }

    }

    $car1 = new Car("Honda Civic", 2000, 1980);
    $car2 = new Car("Volks Beetle", 1999, 1980);

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

            {
                echo $car1->getMake();
                echo $car1->getPrice();
                $car1->setMake("BMW");
                echo $car1->getMake();


            }

        ?>

    </body>
</html>
