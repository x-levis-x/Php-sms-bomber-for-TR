<?php
require_once('utils.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gateway.komagene.com.tr/auth/auth/smskodugonder');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: */*',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Origin: https://www.komagene.com.tr',
    'Referer: https://www.komagene.com.tr/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-site',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'X-Guatamala-Kirsallari: @@b7c5EAAAACwZI8p8fLJ8p6nOq9kTLL+0GQ1wCB4VzTQSq0sekKeEdAoQGZZo+7fQw+IYp38V0I/4JUhQQvrq1NPw4mHZm68xgkb/rmJ3y67lFK/uc+uq',
    'anonymousclientid: 27e9249e-101e-4402-8230-99eeb5eae435',
    'firmaid: 32',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"FirmaId":32,"Telefon":"'.$telno.'"}');

$response = curl_exec($ch);

curl_close($ch);
?>