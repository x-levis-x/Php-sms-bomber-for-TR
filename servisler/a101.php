<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://rio.a101.com.tr/dbmk89vnr/INSTANCE/MsisdnAuthenticator?__culture=tr-TR&__platform=web');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json, text/plain, */*',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Origin: https://www.a101.com.tr',
    'Referer: https://www.a101.com.tr/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-site',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"msisdn":"90'.$telno.'"}');

$response = curl_exec($ch);

curl_close($ch);
?>