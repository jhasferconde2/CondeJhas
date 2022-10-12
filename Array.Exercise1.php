<!DOCTYPE html>
<html>
<body>

<?php
$arrayChars=array(5, 1, 1);

    $arrLength=count($arrayChars);
    $elementCount=array();
  for($i=0;$i<$arrLength;$i++)
    {
       $key=$arrayChars[$i];
      if($elementCount[$key]>=1)
       {
          $elementCount[$key]++;
       } else  {
          $elementCount[$key]=1;
       }
       
       print("element - "."[".$i."]"." : "."[".$key."]<br>");

   }

   
   echo "Total number of duplicate elements found in the array is : $key";
?>

</body>
</html>