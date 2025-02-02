<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tiklagelsin.com/user/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'origin: https://www.tiklagelsin.com',
    'priority: u=1, i',
    'referer: https://www.tiklagelsin.com/a/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-device-type: 3',
    'x-merchant-type: 0',
    'x-no-auth: true',
]);
curl_setopt($ch, CURLOPT_COOKIE, '_pin_unauth=dWlkPVpHVmpZalF6T0RndE1qWTRNUzAwTjJRd0xUbG1OVEF0T0RRMFltWmlORFpqWTJFdw; _derived_epik=dj0yJnU9eTdrUGNfcU5LWUxIUGpLTkpLVHUzS1l0Uk5IakVINkkmbj1veTk3bnRHLTZGc1U3WXJGbURBUlNnJm09MSZ0PUFBQUFBR2RwZUVJJnJtPTEmcnQ9QUFBQUFHZHBlRUkmc3A9Mg');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"operationName":"GENERATE_OTP","variables":{"phone":"+90'.$telno.'","challenge":"73eab7de-4cfb-48ee-a718-5761d7bc2734","deviceUniqueId":"web_cb2033c0-eaa1-46dc-9d52-6e488f7235f0"},"query":"mutation GENERATE_OTP($phone: String, $challenge: String, $deviceUniqueId: String) {\\n  generateOtp(\\n    phone: $phone\\n    challenge: $challenge\\n    deviceUniqueId: $deviceUniqueId\\n  )\\n}\\n"}');

$response = curl_exec($ch);

curl_close($ch);
?>