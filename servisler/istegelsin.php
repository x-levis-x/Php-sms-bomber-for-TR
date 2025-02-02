<?php
require_once('utils.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.hakmarexpress.com.tr/api/auth/otp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'origin: https://www.hakmarexpress.com.tr',
    'priority: u=1, i',
    'referer: https://www.hakmarexpress.com.tr/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-client-id: 929e0000-5686-0050-02a6-08dd236b6581',
    'x-client-key: bedabdf96dc6fca102ea059e202f964b218f93436e2f0264ec1fa66028240ccb',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'client-key=929e0000-5686-0050-02a6-08dd236b6581; client-signature=alSQ22ztspKz2NXzse1bhyQ2rCMKRc1sFXpkeiNdhVWKS0iHVGsKH6eLuBENRnLvPuwo5Z7glmAU9ln6PXuL50XTuHqsJhebCb0h6Xpkst6GD1NeGeQnHK7EXv96XbpVxsaQQkbWaQPBk%2BTufTj3ZO0UQRS8g%2FMpYUTqZ%2BISETzJ3sO27fhJqr83uRYny742US3DzZvVpGPmkVeVYhKYv91CxxiWbo51zaLm8u%2FJ2DGzvd0b8SuipgyJVktMLDp2R4ku3P5PkSGA6TAm5zUEc%2FikwD%2BiKtkRKeBYCY4IIOI8P0GoklnhJh9cKTkOCjnQV17p7ExZtN5HgngQAyc8Hw%3D%3D; __sessionId=929e0000-5686-0050-157e-08dd236b65a9');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"channel":0,"phoneNumber":"'.$telno.'","countryCode":"90"}');

$response = curl_exec($ch);

curl_close($ch);
?>