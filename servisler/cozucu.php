<?php
require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.cozucu.app/services/api/functions.php?action=registerv2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'origin: https://deneme.cozucu.app',
    'priority: u=1, i',
    'referer: https://deneme.cozucu.app/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'nameSurname='.$adın.'&telephoneNumber='.$telno.'&emailAddress='.$email.'&class=lgs&promotionCheckbox=false');

$response = curl_exec($ch);
curl_close($ch);

?>

