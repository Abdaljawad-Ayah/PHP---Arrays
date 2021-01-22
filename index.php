<?php 
   echo '============Task One===========';
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>

</style>
<?php
   $color = array('white', 'green ', 'red', 'blue', 'black');
   echo "The memory of that scene for me is like a frame of film forever frozen at that
   moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
   new president and his first lady. - Richard M. Nixon  <br><br>";
  

?>

<br>
<br>
<?php 
   echo '============Task Two===========';
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php

$users = array("Green","Red","White"); 
sort($users);

$length = count($users);
for($i = 2; $i < count($users); $i++){
  // echo $users[$x];
  echo "<br>";
  // echo "<ul>";
  
foreach ($users as $y)
{
  echo "<li>$y</li>";

}
}  

?>

<body>

</body>

</html>
<br>
<br>
<?php 
   echo '============Task Three===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cities</title>
</head>

<?php
   $cities= array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
   "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
   "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
   "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
   "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
   asort($cities);
  //  for($x = 2; $x < $cities; $x++){
   foreach ($cities as $country => $capital)
   {
   echo "The capital of $country is $capital"."<br>";
   }
  // }
?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Four===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Element</title>
</head>
<?php
      $x = array(1, 2, 3, 4, 5);
      print_r($x);
      unset($x[2]);
      echo '<br>';

      print_r($x);
      echo '<br>';

      var_dump($x);
      echo '<br>';

      $x = array_values($x);
      var_dump($x);

   ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Five===========';
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color</title>
</head>
<?php
   $color = array(4 => 'white', 6 => 'green', 11=> 'red');
   echo "Expected Result: ",array_values($color)[0];
  ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Six===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert a new item</title>
</head>
<?php 
   $OriginalArray = array(1,2,3,4,5);

   echo "Original Array : ";
   foreach ($OriginalArray as $a) {
     echo "$a";
   }
   echo "<br>";
   $newItem = '$';
   $postion = 3;
   array_splice($OriginalArray, $postion, 0, $newItem);
   echo "After inserting the $ sign :";
   foreach ($OriginalArray as $a) {
    echo "$a";
  }
   
  ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Seven===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<?php
  
    echo "ascending order sort by Value ";
    echo "<br>";
// ascending order sort by value
    $names = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($names);

    foreach($names as $c => $c_value) {
      echo "key=" . $c . ", Value= " . $c_value;
      echo "<br>";
    }
     
echo "<br>";
echo "ascending order sort by Key ";
echo "<br>";
// ascending order sort by Key
$names = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($names);

foreach($names as $c => $c_value) {
  echo "key=" . $c . ", Value= " . $c_value;
  echo "<br>";
}

echo "<br>";
echo "descending order sorting by Value ";
echo "<br>";
// descending order sorting by Value

$names = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($names);

foreach($names as $c => $c_value) {
  echo "key=" . $c . ", Value= " . $c_value;
  echo "<br>";
}

echo "<br>";
echo "descending order sorting by Key ";
echo "<br>";

// descending order sorting by Key
$names = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($names);

foreach($names as $c => $c_value) {
  echo "key=" . $c . ", Value= " . $c_value;
  echo "<br>";
}

 ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Eight===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php 
   $temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
   73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
   // use explode function to split a string into many different strings
   $temp_array = explode(',' , $temp);
   $total_temp = 0;
   // use count function which returns the size or number of elements.
   $temp_array_lenght = count($temp_array);
   // 
   foreach($temp_array as $temps)
   {
     $total_temp += $temps;
   }

   $avg_high_temp = $total_temp/$temp_array_lenght;
   
   echo "Average Temp is : ".$avg_high_temp."";
   sort($temp_array);
   
   echo "<br>List of five lowest temps :" ;
   for ($i = 0; $i< 5; $i++){
     echo $temp_array[$i].', ';
   }
   
   echo "<br>List of five Highest temps :" ;
   for ($i=($temp_array_lenght-5); $i < ($temp_array_lenght); $i++)
   {
     echo $temp_array[$i].", ";
   }
   
   
?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Nine===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>merge array</title>
</head>
<?php
    $array1 = array(array(70,40), array(25, 45));
    $array2 = array("example", "com");

    $result = array_merge($array1, $array2);
    print_r($result);
    
  ?>

<body>

</body>

</html>


<br>
<br>
<?php 
   echo '============Task Ten===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>upper & lower case </title>
</head>
<?php
 function array_change_value_case($input, $ucase)
 {
 $case = $ucase;
 $narray = array();
 if (!is_array($input))
 {
 return $narray;
 }
 foreach ($input as $key => $value)
 {
 if (is_array($value))
 {
 $narray[$key] = array_change_value_case($value, $case);
  continue;
 }
 $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
//  $narray[$key] = (!$case == CASE_LOWER ? strtolower($value) : strtoupper($value)); 
}
 return $narray;
 }
 $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
//  echo 'Actual array ';
//  print_r($Color);
//  echo 'Values are in lower case.';
 $myColor = array_change_value_case($Color,CASE_LOWER);
 print_r($myColor);
//  echo 'Values are in upper case.';
 $myColor = array_change_value_case($Color,CASE_UPPER);
 print_r($myColor);
   
     

  ?>

<body>

</body>

</html>


<br>
<br>
<?php 
   echo '============Task Eleven===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Between 200 & 250</title>
</head>
<?php
  printf('%d', 200);
  for($i = 204; $i <= 250; $i += 4)
  {
      printf(', %d', $i);
  }
 
  ?>

<body>

</body>

</html>


<br>
<br>
<?php 
   echo '============Task Eleven===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ٍShortest Longest</title>
</head>

<?php
// $multis = array(array(1,2,3),
// array(4,5,6), 
// array(7,8,9)
// );
// $multi = array(
//   array(1,"anas","IT"),
//   array(2,"jinan","Kitchen"),
//   array(3,"heba","sales"),
//   array(4,"ahmad","HR"),
//   $mutli2 = array(
//     array(1,2,3,4),
//     array("anas","jinan","heba","ahmad"),
//     array("IT","Kitchen","sales","HR"),
//   )
  
// );

$letters = array("abcd","abc","de","hjjj","g","wer");

$newLetters = array_map('strlen' , $letters);

foreach($letters as $n=>$LET) {
  if(is_array($LET))
  {
    foreach($LET as $key => $value ){
      echo $key." ".$value."<br>";
    }
  }else {
    echo $n." ".$LET."<br>";

  }
}
echo "The shortest array length is " . min($newLetters) .
". The longest array length is " . max($newLetters);
// foreach($letters as $k=>$soso){
	// if(is_array($soso)){}
	// if(gettype($soso) == 'array'){}
	// if(is_array($soso)){
	// 	foreach ($soso as $key => $value) {
	// 		echo $key." ".$value."<br>";
	// 	}
	// }else{
	// 	echo $k." ".$soso."<br>";
	// }
// }

// $result = (array_merge($letters));
// echo "<pre>";
// print_r($result);




// $id    = array();
// $names = array();
// $dept  = array();

// $multi will printed as multidimessional array contain employee info 
// array(1,"anas","IT"),

// $multi = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");


  ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Twelve===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unique random</title>
</head>
<?php
$v= range(11, 20);
shuffle($v);
  // foreach($v as $b => $key)
  // {
   for ($m=0; $m< 10; $m++){
     echo $v[$m].' '; 
  } 
  //  print_r(rand($v));
  ?>

<body>

</body>

</html>


<br>
<br>
<?php 
   echo '============Task Thirteen===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Largest Key</title>
</head>
<?php
    $word = array(0 => 'you', 1 => 'can' , 2 => 'do' , 3 => 'it', 4 => 'just' ,5 => 'keep', 6=>'going' );
    $max_key = max(array_keys($word));
    echo $max_key
  ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Thirteen===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lowest Integer</title>
</head>
<?php
    // $int = array(0 , 1 , 2 , 3 , 4 ,5 , 6 );
    // $min_int = min(range(1,6));
    // echo $min_int;
    // echo "<br>";
    // print_r( $min_int)

    // another solution i saw on w3resource 
    
    function min_values_not_zero(Array $values)
    {
      return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(-1,0,1,12,-100,1)));

  ?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Fourteen===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>floor decimal numbers with precision</title>
</head>
<?php
// I took it from w3resource and analyze it to understand it 
      function floorDec ($number , $precision, $seprator) 
      {
        $number_part = explode($seprator, $number);
        $number_part[1] = substr_replace($number_part[1] ,$seprator, $precision, 0 );
        if($number_part[0] >=0)
        {$number_part[1] = floor($number_part[1]);}
        else
        {$number_part[1] = ceil($number_part[1]);}

        $ceil_numbers = array($number_part[0], $number_part[1]);
        return implode($seprator, $ceil_numbers);

      }

      print_r(floorDec(1.155, 2 ,'.').'<br>');
      print_r(floorDec(100.25781, 4 ,'.').'<br>');
      print_r(floorDec(-2.9636, 3 ,'.').'<br>');

  ?>

<body>

</body>

</html>
<br>
<br>
<?php 
   echo '============Task Fiveteen===========';
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>print "second" and Red</title>
</head>
<?php

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

echo $color["holes"][5]."<br>";
echo $color["color"]["a"]."<br>";
echo $color["numbers"][2]."<br>";
?>

<body>

</body>

</html>


<br>
<br>
<?php 
   echo '============Task Sixteen===========';
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> sort an array</title>
</head>
<?php
function list_cmp($a, $b) 
{ 
  global $order; 

  foreach($order as $key => $value) 
    { 
      if($a==$value) 
        { 
          return 0; 
          break; 
        } 

      if($b==$value) 
        { 
          return 1; 
          break; 
        } 
    } 
} 

$order[0] = 1;
$order[1] = 3; 
$order[2] = 4; 
$order[3] = 2; 

$array[0] = 2;
$array[1] = 1; 
$array[2] = 3; 
$array[3] = 4; 
$array[4] = 2; 
$array[5] = 1; 
$array[6] = 2; 

usort($array, "list_cmp"); 
echo ($array."<pre>");
print_r($array); 
?>

<body>

</body>

</html>

<br>
<br>
<?php 
   echo '============Task Sixteen===========';
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> case-insensitive natural ordering</title>
</head>
<?php
    $colors = array(
      "color1", "color20", "color3", "color2"
    );
    sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($colors as $key => $val) {
      echo "Colors[" . $key . "] = " . $val . "<br>";
    }
?>

<body>

</body>

</html>