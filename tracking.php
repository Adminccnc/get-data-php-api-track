<?php

use function PHPSTORM_META\type;

//@custom by source code tracktry.com 
//@implement an other php on research on website
//thx for dev on website

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.tracktry.com/v1/trackings/{carrier}/{tracking_number}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$head = array();
$head[0] = "Accept: application/json";
$head[1] = "Tracktry-Api-Key: **{API_KEY}** }";
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$result = curl_exec($ch);
$try = json_decode($result, true);

//print_r($try);

echo ('tracking_number : ') .$try['data']['0']['tracking_number']."\n";
echo ('status : ') .$try['data']['0']['status']."\n\n";
$rasult =  $try['data']['0']['origin_info']['trackinfo'];

/* foreach($ras as $ras){
    print_r($ras)  . "<br>";
}
 */

foreach($rasult as $mydata)

    {
        echo ("______");
         echo $mydata['StatusDescription']."\n";
         echo $mydata['Date']."\n";
         echo $mydata['Details']."\n";
         echo $mydata['checkpoint_status']."\n";
         echo $mydata['substatus']."\n";

         
    }  
//and programing def