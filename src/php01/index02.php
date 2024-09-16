<?php
$item = "JavaScript";
$item = "php";
echo $item;

const FELANGUAGE = "Vue.js";
echo FELANGUAGE;

$number=20;
$grad="こんにちは";
echo $number;
echo $grad;

$name="Tanaka";
$last_name="Yamada";
$first_name="Saburo";
echo $name . "Jiro";
echo "</br>";
echo $last_name . $first_name;

$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";

$a = 7;

if ($a == 5) {
echo "\$aは5です";
}elseif ($a==7){
echo "\$aは7です";
}else{
   echo "\aは5意外です";
}

$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}

$result = $a==7 ? "TRUE" : "FALSE";
echo $result;

for ($i = 1; $i <= 5; $i++){
   echo "</br>";
echo $i*2;
}

$i=1;

while ($i<=20){
   echo "</br>";
   echo $i++;
}

$total=1;
while ($total<100){
   if ($total%3==0){
      $total++;
      continue;
   }
   if ($total>19){
break;
   }
   echo $total;
   $total++;
   echo "</br>";
}

$name=0;
do {
   echo "num = ".$name;
   $name++;
   echo "</br>";
} while($name<=2);


for ($count=1; $count <= 50; $count++) { 
   if ($count%3==0 and $count%5==0) {
      echo "FizzBuzz";
echo "</br>";
   }elseif ($count%3==0) {
      echo "Fizz";
      echo "</br>";
   }elseif ($count%5==0) {
      echo "Buzz";
      echo "</br>";
   }else {
      echo $count;
      echo "</br>";
   }
}