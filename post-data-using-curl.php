<?php
$url="https://reqres.in/api/users";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,"name=test&job=dev");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
$html=curl_exec($ch);
echo $html;
?>
