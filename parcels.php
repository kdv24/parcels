<?php
    class Parcel
    {
        private $weight;
        private $height;
        private $length;
        private $depth;

        function __construct($weight, $height, $length, $depth)
        {
            $this->weight = $weight;
            $this->height = $height;
            $this->length = $length;
            $this->depth = $depth;
        }

        function getWeight()
        {
            return $this->weight;
        }
        function getHeight()
        {
            return $this->height;
        }
        function getLength()
        {
            return $this->length;
        }
        function getDepth()
        {
            return $this->depth;
        }
        function setWeight($new_weight)
        {
            $this->weight=$new_weight;
        }
        function setHeight($new_height)
        {
            $this->height=$new_height;
        }
        function setLength($newLength)
        {
            $this->length=$new_length;
        }
        function setDepth($new_depth)
        {
            $this->depth=$new_depth;
        }
        function volume($length, $height, $depth)
        {
             return ($this->length * $this->height * $this->depth);
        }


    }

$parcel1 = new Parcel(10.7, 4, 3, 4);
$parcel2 = new Parcel(9.3, 9, 3, 7);

$given_weight = $_GET["weight"];
$given_height = $_GET["height"];
$given_length = $_GET["length"];
$given_depth = $_GET["depth"];


$parcel3 = new Parcel($given_weight, $given_height, $given_length, $given_depth);


?>

<!DOCTYPE html>
<html>
<head>
    <title>HEllO</title>
</head>
<body>
    <p><?php
    if ($given_weight)
    {
    echo $parcel3->getWeight();
    echo $parcel3->getHeight();
    echo $parcel3->getLength();
    echo $parcel3->getDepth();
    

    }
    else
    {
        echo "empty";
    }
    ?>
    </p>

</body>
</html>
