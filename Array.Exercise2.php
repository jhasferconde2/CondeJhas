<!DOCTYPE html>
<html>
<body>


<h1>Exercise 2</h1>

<?php
echo "Input the number of elements to be stored in the array :3" . "<br>";
echo "Input 3 elements in the array :" . "<br>";
$num = array(25,12,43);

for($i = 0; $i < COUNT($num); $i++) {
echo "element - " . $i . " : " . $num{$i} . "<br>";
}

echo "The frequency of all elements of an array: " . "<br>";
$new_array = array_count_values($num);

while (list ($key, $val) = each ($new_array)) {
echo  "$key" . " occurs " . "$val"." times " ."<br>";
}


?>


</body>
</html>