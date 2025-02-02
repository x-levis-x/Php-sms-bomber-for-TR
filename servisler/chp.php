<?php

require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.botti.com.tr/account/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json;charset=UTF-8',
    'origin: https://www.botti.com.tr',
    'priority: u=1, i',
    'referer: https://www.botti.com.tr/account/register',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_COOKIE, '.Gizsoft.Session=CfDJ8CgqKI0s9oxDpZDsdUfEgxFZtPNuxHCnrRYPbOX2%2BUmDvCDY329MeF3ykScGM5i7Ue4vrD62qjZamGH84n572DFCxMT%2BTVHdTRMY9zrDMxwYfAHc3BdWzl2m0BGDX3NIQoN0T9xVPQD3FgaBCvo23mo%2Bkj3PNnHHP73Omo5CXsO%2F; _ga=GA1.1.245603799.1736171356; _gcl_gs=2.1.k1$i1736171354$u159684142; _gcl_au=1.1.1901857777.1736171356; _clck=8on50h%7C2%7Cfsc%7C0%7C1832; OptanonConsent=isGpcEnabled=0&datestamp=Mon+Jan+06+2025+16%3A49%3A17+GMT%2B0300+(GMT%2B03%3A00)&version=202403.2.0&browserGpcFlag=0&isIABGlobal=false&hosts=&landingPath=https%3A%2F%2Fwww.botti.com.tr%2Ffisher-price-b-108%3Fgad_source%3D1%26gclid%3DCjwKCAiAm-67BhBlEiwAEVftNp-Q7iIhw-WJklez_3Kwbb-C2z_NfNJ_0aYMaxE3CCIWGIDrRYJyhRoC-H8QAvD_BwE&groups=C0004%3A0%2CC0002%3A0%2CC0001%3A1; _gcl_aw=GCL.1736171361.CjwKCAiAm-67BhBlEiwAEVftNp-Q7iIhw-WJklez_3Kwbb-C2z_NfNJ_0aYMaxE3CCIWGIDrRYJyhRoC-H8QAvD_BwE; _clsk=19ytlti%7C1736171361608%7C2%7C1%7Co.clarity.ms%2Fcollect; _ga_V2LFGB410Y=GS1.1.1736171356.1.1.1736171365.0.0.0');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"Name":"'.$adın.'","Surname":"'.$soyadın.'","GSMNo":"'.$telno.'","Email":"'.$email.'","Password":"'.$pass.'","returnUrl":"","UsageTerms":true,"Kvkk":true,"NotificationEmail":false,"NotificationSMS":false,"gsmValidationCode":"","DateOfBirthDay":null,"DateOfBirthMonth":null,"DateOfBirthYear":null,"BirthDay":null,"Gender":null}');

$response = curl_exec($ch);

curl_close($ch);
?>