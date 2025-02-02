<?php
require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://vatandas.iys.org.tr/api/v1/cbff/recipients');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json, text/plain, */*',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Origin: https://vatandas.iys.org.tr',
    'Referer: https://vatandas.iys.org.tr/giris?redirect=%2Fprofil',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"recipient":"+90'.$telno.'"}');

$response = curl_exec($ch);

curl_close($ch);
?>