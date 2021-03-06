<?php
    class Parcel
    {
        private $weight;
        private $height;
        private $length;
        private $depth;

        function __construct($height, $length, $depth, $weight)
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
        function volume($height, $length, $depth)
        {
              return ($this->height * $this->length * $this->depth);
        }

        function shipping($weight, $length)
        {
            return ($this->weight * $this->length);
        }
    }

$parcel1 = new Parcel(10.7, 4, 3, 4);
$parcel2 = new Parcel(9.3, 9, 3, 7);

$given_weight = $_GET["weight"];
$given_height = $_GET["height"];
$given_length = $_GET["length"];
$given_depth = $_GET["depth"];


$parcel3 = new Parcel($given_height, $given_length, $given_depth, $given_weight);


?>

<!DOCTYPE html>
<html>
<head>
    <title>HEllO</title>
</head>
<body>
    <p><?php
    if ($given_weight && $given_height && $given_length && $given_depth)
    {
    echo "<ul>";
    echo "<li> Weight: " . $parcel3->getWeight() . "</li>";
    echo "<li> Height: " . $parcel3->getHeight() . "</li>";
    echo "<li> Length: " . $parcel3->getLength() . "</li>";
    echo "<li> Depth: " . $parcel3->getDepth() . "</li>";
    echo "</ul>";
    echo $parcel3->volume($parcel3->getHeight(), $parcel3->getLength(), $parcel3->getDepth());
    echo $parcel3->shipping($parcel3->getWeight(), $parcel3->getLength());
    

    }
    else
    {
        echo "empty";
    }
    ?>
    </p>

</body>
</html>
