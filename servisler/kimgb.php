<?php
   $url = 'https://3uptzlakwi.execute-api.eu-west-1.amazonaws.com:443/api/auth/send-otp';
   $data = array("msisdn" => "90$telno");
   $postdata = json_encode($data);
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0");
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
   $result = curl_exec($ch);
   curl_close($ch);
?>
