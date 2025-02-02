<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.showsanal.com/api/auth/otp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'origin: https://showsanal.com',
    'priority: u=1, i',
    'referer: https://showsanal.com/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-client-id: 37710000-56aa-0050-52c8-08dd3d7825a3',
    'x-client-key: d81a9cc1eaa50666590c2271651fc20edc8ac24ead5dd22fefe4defe970a83d7',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'client-key=37710000-56aa-0050-52c8-08dd3d7825a3; client-signature=R1U%2Bja2LqdrCcG54Z8XShnJWaplYNq6WBoPTRlDIk8ttkZs6KJiCtALWixF0%2BxKschu8CGOVwmvCm7gy7ljxHlNd6cR7a8I3wWflooUiVoKlKwLaVfyyKBvg6d0jPa5wbrUpuHYU6mjYNf2ex%2Fqv%2BVLRTgv5OYv72YfR3FhBLoAHmnTqyBYhBwpdW2cTjKXpjyaapQWMIuz4Q9hUjTsQkiat3qDHxeQrmra8jwuY7lVTm%2B3dcKp%2BRO4KU90w1d7kKP%2FPMwnrX2lPeu98oui2Fka%2Bm9%2Ba9X9AdXNtpAgtjmL1GFJYXN81dcMTBHW3K1yC4MI8KOX4YUr02tU6c8pRig%3D%3D; _gcl_aw=GCL.1737833968.CjwKCAiAtNK8BhBBEiwA8wVt91QPPitre8rBPRIzQVwR-hTVyyYIqUT8zFJGwCwwh4lAFTCgaAns4hoC2rIQAvD_BwE; _gcl_gs=2.1.k1$i1737833968$u21389689; _ga=GA1.1.1551620210.1737833968; _gcl_au=1.1.1064813693.1737833968.1557685864.1737833983.1737833982; _ga_2YC9G3ES74=GS1.1.1737833968.1.1.1737833982.0.0.0');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"channel":0,"phoneNumber":"'.$telno.'","countryCode":"90"}');

$response = curl_exec($ch);

curl_close($ch);
?>

