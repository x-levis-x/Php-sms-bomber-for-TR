<?php
require_once('utils.php');

$orspu1 = substr($telno, 0, 3);
$orspu = substr($telno, 3, 10);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.flo.com.tr/ajax/customer/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/javascript, */*; q=0.01',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'origin: https://www.flo.com.tr',
    "permissions-policy: geolocation 'self' https://www.flo.com.tr",
    'priority: u=1, i',
    'referer: https://www.flo.com.tr/customer/login',
    'referrer-policys: no-referrer',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-frame-options: SAMEORIGIN',
    'x-requested-with: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'bunsar_visitor_id=f73fa42b-e3d3-4b91-8c3a-ba6266f6bd8f; get_user_id=av09ixs1at617; activeTab=1; _gcl_au=1.1.986900537.1735137604; lastclick=organic; _ym_uid=1735137605627748299; _ym_d=1735137605; jcoPageCount=2; _ym_isad=1; _hjSessionUser_1045399=eyJpZCI6IjU0ZGY1M2U5LWMyODItNTM1NC1iMTQ5LTM2MDA1ZWRlOTBkYiIsImNyZWF0ZWQiOjE3MzUxMzc2MDU4NTAsImV4aXN0aW5nIjpmYWxzZX0=; _hjSession_1045399=eyJpZCI6ImUxYTNmODMzLWQ5OTQtNDJkZi05Y2UwLTE2ZDU2MzdiNTdiOCIsImMiOjE3MzUxMzc2MDU4NTEsInMiOjAsInIiOjAsInNiIjowLCJzciI6MCwic2UiOjAsImZzIjoxLCJzcCI6MX0=; _tt_enable_cookie=1; _ttp=LZqfP2Q8thpsvWcR_1C41T8gOs6.tt.2; _ym_visorc=b; _derived_epik=dj0yJnU9d1lybGNmS19vVm53ZXJmbk1VQktOVk10WVk0dllZVEombj1vUmxpZ2xUWHZ5WVJOeGRTR0JjZHhRJm09MSZ0PUFBQUFBR2RzR1VZJnJtPTEmcnQ9QUFBQUFHZHNHVVkmc3A9Mg; _pin_unauth=dWlkPVpHVmpZalF6T0RndE1qWTRNUzAwTjJRd0xUbG1OVEF0T0RRMFltWmlORFpqWTJFdw; G_ENABLED_IDPS=google; waitingTime=0; PHPSESSID=vqg825gj3vhu1qgr2lnqhua0c1; user-token=9510ac8ea8588eb82ada5a67525ad588a7b32161');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'csrf_token=9510ac8ea8588eb82ada5a67525ad588a7b32161&phone=0('.$orspu1.')-'.$orspu.'&email='.$email.'&password='.$pass.'&gender=1&uyelik_sozlesmesi=80&subscribed_kvkk=85');

$response = curl_exec($ch);

curl_close($ch);
?>

