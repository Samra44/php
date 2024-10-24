<?php
 $a="we are learning PHP"; 
 echo $a ."<br>";

 $x=23;
 $y=50;
 $sum=$x+$y;
 echo $sum;

 $fname = "samrah";
 $lname ="Anwar";
 $full_name = $fname. " " .$lname;
 echo  "<b><i> 'my full name is' . $full_name</i></b>" . "<br>";


$b=2;
$c=4;
$d= $b**$c;

echo $d;
var_dump($d) . "<br>";

// compersion operator
// <
// >=
// <=
// ==
// !=

$per =40;
if($per>=60){
  echo "congratz you are selected for addmission .<br>" ;
}else{
    echo "congratz you are  not selected for addmission .<br>";
}


$number=40;
if($number<0){
   echo "its positive number" . "<br>";
}else{
   echo "its positive number" . "<br>";
}

$age=45;
if($age==45){
    echo "you are eligible for 50% discount" . "<br>";
}else{
    "you are not eligible for 50% discount" . "<br>";
}

$number=40;
if($number%2==0){
    echo "its even number" .$number . "<br>";
}else{
     echo "its odd number" .$number . "<br>";
}

//logical operator
// And
// OR
// Not
// XOR

 $user_name="Samra";
 $password=1234;
 if($user_name== "Samra" && $password==123){
    echo "login successfull"."<br>";
 }else{
    echo "login fail" ."<br>";
 }

 $age=6;
 $height=4.5;
 if($age==6 OR $height==5.5){
    echo "you are eligible for ride" ."<br>";
 }else{
    echo  "you are not eligible for ride" ."<br>";
 }





?>