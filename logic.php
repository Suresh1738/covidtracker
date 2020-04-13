<?php
$jsondata=file_get_contents("https://pomber.github.io/covid19/timeseries.json");
$data=json_decode($jsondata,true);
//for nepal 
$myjson=file_get_contents("http://localhost/covid19/districtindex.json");
$districtdta =json_decode($myjson,true);
foreach($districtdta as $key1=>$value1){
    $arrcount=count($value1)-1;
  

}
foreach($data as $key=>$value){
    $days_count=count($value)-1;
    $days_prev_count=$days_count-1;
}


$totalcases=0;
$totalrecovered=0;
$totaldeaths=0;
foreach($data as $key =>$value){
$totalcases=$totalcases+$value[$days_count]["confirmed"];
$totalrecovered=$totalrecovered+$value[$days_count]["recovered"];
$totaldeaths=$totaldeaths+$value[$days_count]["deaths"];
}

?>