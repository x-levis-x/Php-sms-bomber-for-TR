<?php
require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.ucdortbesallstar.com/auth/register/phone');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer null',
    'content-type: application/json',
    'origin: https://www.ucdortbesallstar.com',
    'os: chrome',
    'os-version: 131.0.0',
    'priority: u=1, i',
    'referer: https://www.ucdortbesallstar.com/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"fullname":"'.$tamper.'","username":"'.$soyadın.'","phone":"90'.$telno.'","business_code":null}');

$response = curl_exec($ch);

curl_close($ch);

?>