<?php
require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api2.e-bebek.com/ebebekwebservices/v2/ebebek/users/anonymous/validate?lang=tr&curr=TRY');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: bearer TbVixUrGGDuW9tGzfiKzVu13Bw4',
    'content-type: application/json',
    'origin: https://www.e-bebek.com',
    'platform: web',
    'priority: u=1, i',
    'referer: https://www.e-bebek.com/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'sms-validation-token: M8pi40B31bcF/4Pl2s2CSFSMn2lrqvXYniU2puAWz8M=',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"uid":"'.$telno.'","firstName":"'.$adın.'","lastName":"'.$soyadın.'","email":"'.$email.'","password":"'.$pass.'","smsAllow":false,"emailAllow":false,"userAgreement":true,"kvkkAllow":true,"registerChannel":"","captchaResponse":null}');

$response = curl_exec($ch);

curl_close($ch);
?>