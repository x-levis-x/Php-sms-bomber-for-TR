<?php
require_once('utils.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://core.kahvedunyasi.com/api/users/sys/sms/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json, text/plain, */*',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/json;charset=UTF-8',
    'Guest-Token: HywWzpBV95Wptx3oleMYYidQigGFsEyrkeeVOl2H',
    'Origin: https://www.kahvedunyasi.com',
    'Positive-Client: kahvedunyasi',
    'Positive-Client-Type: web',
    'Referer: https://www.kahvedunyasi.com/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-site',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'page-url: /kayit-ol',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'store-id: 1',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile_number":"'.$telno.'","token_type":"register_token"}');

$response = curl_exec($ch);

curl_close($ch);

?>