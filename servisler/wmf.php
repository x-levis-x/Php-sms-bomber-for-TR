<?php
require_once('utils.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.wmf.com.tr/users/register/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'origin: https://www.wmf.com.tr',
    'priority: u=1, i',
    'referer: https://www.wmf.com.tr/users/register/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-requested-with: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'csrftoken=SkzM6qYD6MZ7Pkla9u6wroh1lYb45VzQYu1QtBddHKD3faPqH68hGLBVIEHow9PN; sessionid=0y4xmpayg5wj4axedmr8x025pbokqcl4; osessionid=w8cptbx1g2qet9iv4xw4zlxkvp6kkm36; CookieSealConsent=eyJ1c2VySWQiOiJiMmIwMjI4OC0wN2IzLTQyMTUtYTlhYy1jNGQyYTc5YjI4ZWYiLCJ0ZW5hbnRJZCI6IjYxMWE2Zjk0ZGExNGNhMDAxM2I5YTgyYyIsInNpdGVJZCI6IjlhMjZiMjYxLWQzNGQtNDNjZS1iZjhjLWJlMzA5ZGYxMDQ5ZiIsInNhdmVkIjp0cnVlLCJjYXRlZ29yaWVzIjp7Ik5lY2Vzc2FyeUNvb2tpZXMiOiIxIiwiUGVyZm9ybWFuY2VDb29raWVzIjoiMCIsIk1hcmtldGluZ0Nvb2tpZXMiOiIwIn19');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"first_name":"'.$adın.'","last_name":"'.$soyadın.'","email":"'.$email.'","phone":"0'.$telno.'","gender":"male","id=\\"\\"":"1995","date_of_birth":"1995-02-15","password":"'.$pass.'","confirm":"true","kvkk_agreement":"true"}');

$response = curl_exec($ch);

curl_close($ch);
?>
