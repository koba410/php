<?php
function SumNumberCheck($score1,$score2,$score3)
{
    $sum = $score1+$score2+$score3;
    if ($sum>210) {
        return "合計点は".$sum."なので合格です";
    }else {
        return "合計点は".$sum."なので不合格です";
    }
}

echo SumNumberCheck(100,30,100);

$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "男性"
  ],
  [
    "name" => "Hanako",
    "age" => 16,
    "gender" => "女性"
  ]
];

foreach($people as $person){
    print $person["name"].'('.$person["age"].'歳'.$person["gender"].')'.'<br />';
}