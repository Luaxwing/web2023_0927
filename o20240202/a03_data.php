<?php


$mobileArr = [
  [
    'id' => 1,
    'name' => 'iphone10',
    'price' => 10000,
    'location' => ['台北']
  ],
  [
    'id' => 2,
    'name' => 'iphone11',
    'price' => 20000,
    'location' => ['台北', '台中']
  ],
  [
    'id' => 3,
    'name' => 'iphone12',
    'price' => 30000,
    'location' => ['高雄']
  ],
  [
    'id' => 4,
    'name' => 'iphone13',
    'price' => 40000,
    'location' => ['台北', '台中', '高雄']
  ],



];


// print_r($mobileArr);
// echo $mobileArr;


echo json_encode($mobileArr);


function dd($data)
{

  echo "<pre>";
  echo $data;
  echo "</pre>";

}