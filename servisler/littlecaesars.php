<?php
require_once('utils.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.littlecaesars.com.tr/api/web/Member/Register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6IjM1Zjc4YTFhNjJjNmViODJlNjQ4OTU0M2RmMWQ3MDFhIiwidHlwIjoiSldUIn0.eyJuYmYiOjE3Mzc4MzI5MzcsImV4cCI6MTczODQzNzczNywiaXNzIjoiaHR0cHM6Ly9hdXRoLmxpdHRsZWNhZXNhcnMuY29tLnRyIiwiYXVkIjpbImh0dHBzOi8vYXV0aC5saXR0bGVjYWVzYXJzLmNvbS50ci9yZXNvdXJjZXMiLCJsaXR0bGVjYWVzYXJzYXBpIl0sImNsaWVudF9pZCI6IndlYiIsInN1YiI6InJvYnVzZXJAY2xvY2t3b3JrLmNvbS50ciIsImF1dGhfdGltZSI6MTczNzgzMjkzNywiaWRwIjoibG9jYWwiLCJlbWFpbCI6InJvYnVzZXJAY2xvY2t3b3JrLmNvbS50ciIsInVpZCI6IjI0IiwicGVyc29uaWQiOiIyMDAwNTA4NTU0NjYiLCJuYW1lc3VybmFtZSI6IkxDIER1bW15IiwibGN0b2tlbiI6ImpqWndIaVFJakE3eVd0bllmNEJiUTFQTDF4Q3pNaXM4U2c2WjQzWHNacEd5QVdtbW11OHFtVFVYbDJPNk1QbjRPVTllNEVIWmFtcVZUOHowSk5MTlgxb3FZZGdUVzN3NVhQNS01anNfRDNsaFp0U2Jpel9CZkxTblNaWm94UU0yTEU1c0N0MUstV0ZSZkM2Q3U0bTJDZHF5V3NGUHNaYks4NmhiazFybVZrYjJUaTlBZG5UR2wzUjBzTzMxQmFVdVlKSmZNRFRvaXZtSUY4QXRIU0s0VllGMi1aeTA3VXlQSk1jaFFEdURJT0YxS3FxT3hsd1hyR19OLWl1UVptdlRzbENFT2ZwU3RscjB3dmpPam5VTWFwNzV3MVk4SkJnSTBIVlJCaWI2Wk9INDFNaUVNU3BYVTBJLTQ1OTZWMnh5eVlveGl1SG9OS2FKLUtSVTdNNUVDN1VtSTUwalBWSTVVMXdxSUFLcWdiczNiTHJDIiwibGNyZWZyZXNodG9rZW4iOiJmNWM1YWU4ZWM5MDE0Y2ZlYjIyNGFiZmY3Y2Q1YmJjZiIsInBlcnNvbmVtYWlsIjoibGNAZHVtbXkuY29tIiwic2NvcGUiOlsibGl0dGxlY2Flc2Fyc2FwaSIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyI3NjU2QkFGM0YxNUE2NTA0QkJGM0NFRTgyOTA5MkRGQSJdfQ.OPF9927_KzPldlRa85aldrx23rUcLgoiXrECpo-WpN90278tSsnt30hG8YR5vFBIfnZzxAvZYcWjfMv8Ze9vaO_MVOf8Nh7IvNGSA4tY1owW-kC_K5LEMXUV2kEBV7dzw0X5HO4pdogVV0xo8uC_IsNCGmYgB1fHII_JyOcHWEuq3LCa9hCNkjFBqSfbjsp7qwSwgCxcB5CMOPP32K0EJomAcHRZ0RC4bwTSpBa6CGjiGH9X6u3_IH0kQylsRv4CC-eUPEsz6QcvYiG39pA5HImZfkKacnH6V1WZko5oGC9oTGsycJiIlXAKF_sXTMT7xI5IKqCIehSEiOUb4_ru9A',
    'content-type: application/json;charset=UTF-8',
    'origin: https://www.littlecaesars.com.tr',
    'priority: u=1, i',
    'referer: https://www.littlecaesars.com.tr/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"NameSurname":"Adil Kara","Email":"'.$email.'","Phone":"'.$telno.'","Password":"'.$pass.'","CampaignInform":false,"SmsInform":false,"IsLoyaltyApproved":false}');

$response = curl_exec($ch);

curl_close($ch);
?>