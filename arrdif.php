<?php
$bc = array("a","b","c","d");
$aa = array("a","b","c","d","e","f");
$cc =  array_diff($aa,$bc);
print_r($cc);
echo "<hr>";
?>


<?php
$array1 = array("green", "red", "blue", "red");
$array2 = array("green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);
?>

