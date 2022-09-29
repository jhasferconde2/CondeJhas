Array Exercise 2 

<?php
//Create array.
$cities=array(
  "Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London"
  );
 
 
foreach($cities as $c){
 print "$c, ";
}
 
//Sort array.
sort($cities);
 

print "\n<ul>\n" ;
foreach($cities as $c){
  print "$c\n";
}
print "</ul>" ;
 

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;
 

sort($cities);
print "\n<ul>\n";
foreach($cities as $c){
  print "$c\n";
}
print "</ul>";
?>