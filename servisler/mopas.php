<?php
require_once('utils.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mopas.com.tr/sms/activation');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: text/plain, */*; q=0.01',
    'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Origin: https://mopas.com.tr',
    'Referer: https://mopas.com.tr/login',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'X-Requested-With: XMLHttpRequest',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'delivery_zone=mopas; _gcl_au=1.1.230459747.1732560414; x-bni-fpc=2fd902e4caf687941252fd3b4e8f317c; iszone_updated=mopas; __utmz=58597046.1735461300.5.2.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); JSESSIONID=792F4C0D6453C7F6CD85A8DB7C367D74; BNI_persistence=-oMuwJWTY8xe9gAXchZ7LZIV_9pUzvcHq4fB0KCvuV1cM6UJrhvXajog7HuniIzXPVd-0J2eO82uc8TcndacvQ==; BNES_iszone_updated=qg+sKNS3o959FETTZz/P67nzvsbM3I2Muaotg8itVQ9TfZw0ZZFdaLh6pZdByO8dAuiNQwx8X7bghzijpJTgZw==; BNES_delivery_zone=0t+q0i8Paz19l3uYoA7M+DQYgfNd9wqpLsyAckDn55zwB0hFdgnf0avv+m0LI0a6lvC/kByCHdQ=; BNES_BNES_iszone_updated=tZLft4YpYPMf+5vfHws1x5DO7Z0eYF4B3OMiRaDNDa0qAnwNxdro9pewUQ+LrqYhjmfdmaxvhF4Za/twqcGd3UC5rDuBmrfgDGBCeX7OlHzNolwNki+GyeNX0w1QdeXCjy8eGo+5NB+BNq0MxnsVwsIPyGWO/a6cuW4vzAgycIcg0XHj8L+R9f4/xmakfS1cxmSuJOT7inY=; BNES_BNES_delivery_zone=etytnQyGGDrWzzPo79YD2Qt+6B6fMMi3IbneTtgKDmDBqpA7cz99qMsmqiGqH9cukfFiBNfrXzrXb6qaIApAcd4cKTbZHDuIrD8Ze6CkLY35DUbFz7X1NtmLbEXAA7UUMPUf04a0nHrNlZc86uf4xKOW+jxkS0AdG0+xZdF5xI7v0sJp+6KcMw==; __utma=58597046.272835636.1732560414.1735461300.1737832595.6; __utmc=58597046; __utmt=1; _gid=GA1.3.2105688814.1737832597; _gat_gtag_UA_90260919_1=1; _ga_8RJDCGET0M=GS1.1.1737832597.5.0.1737832597.60.0.0; _ga=GA1.1.272835636.1732560414; x-bni-rncf=1737832597232; __utmb=58597046.2.10.1737832595; BNES_JSESSIONID=nN4SGkL4N+W4+Z1aDCCAwUyeXUmhOLCAoU3oefljI/d9RswIGWM7GizoWNYAC0QXx7PUyakOtuTIpwTVsx9sCl9R4UtpwiHMbfaG76CMRZU=; BNES_BNES_JSESSIONID=3Gb5zCO77+yQqY/JB9xBTsO/ir+fVQun8iEmLx2rIvpkYRIiJVE4Kh88cMLunGwbDd8n8YcNGMkN95tuvXo+1vQzYOAjCvcgt+uLwal+mNxxAyz5fWGGuvz3ZwkrQoKGWlVcuzzW7+0kGCcwczQR4yL7pg8MIKnqtgm8ZlVydvPxe+TxPavLU65F0o5HxxXzan/E2zcWPdJs99HMm7cUPYv8BZCqnyHA');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'mobileNumber='.$telno.'&pwd=&checkPwd=&g-recaptcha-response=&CSRFToken=5d9a34b4-0ea3-4490-b482-ab7c5f55b0f3');

$response = curl_exec($ch);

curl_close($ch);
?>