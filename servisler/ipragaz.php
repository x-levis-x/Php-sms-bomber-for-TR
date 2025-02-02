<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://ipapp.ipragaz.com.tr/giris-yap/genereateCode');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: */*',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Origin: https://ipapp.ipragaz.com.tr',
    'Referer: https://ipapp.ipragaz.com.tr/giris-yap',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'X-Requested-With: XMLHttpRequest',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'anonymous-consents=%5B%5D; cookie-notification=ACCEPTED; ipragaz-b2c-cart=7f5702e4-eae5-4a52-8380-cda8cd244cbd; _gcl_au=1.1.422289892.1734287537; _ga=GA1.3.1543550126.1734287538; _clck=kxpjwf%7C2%7Cfs1%7C0%7C1810; _ga_QC8CMPKH82=GS1.3.1735238568.3.0.1735238568.0.0.0; _ga_YP4LX02EF1=GS1.1.1735238568.3.0.1735238574.54.0.0; JSESSIONID=Y6-f3897ada-c3e2-41f6-9537-cec7356cb6c0.accstorefront-b7c9d7cc4-wqmbf; ROUTE=.accstorefront-b7c9d7cc4-wqmbf');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'phone='.$telno.'&CSRFToken=93cae08f-ed74-42d8-b456-c91194ce5fb8');

$response = curl_exec($ch);

curl_close($ch);
?>

