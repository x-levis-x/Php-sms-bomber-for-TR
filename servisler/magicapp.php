<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://prod-lexigram-api.uye.app/lexigram/sendIdentificationCode');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/json',
    'origin: https://magic.uye.app',
    'priority: u=1, i',
    'referer: https://magic.uye.app/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-lexi-challenge-token: eyJhbGdvcml0aG0iOiJTSEEtMjU2IiwiY2hhbGxlbmdlIjoiNTRjNGIxNTNkYjYwMjA1ZTQ4OWM1ZmIxYmQwYTMwMGQ2MDI1ZWU2ZmU5NDNlYjE3ZjBkZjc4NGU5YmY4YTgyMCIsIm1heG51bWJlciI6MTAwMDAsInNhbHQiOiI1NjQwNTk4ZWRjN2IyZTY3OWMwODAzMzUiLCJzaWduYXR1cmUiOiIzODA1NTY4YjZkNDMzMmJhYzQ3MjQwNTAyMTkwNWM1MWM5ZjNiOTMwYTgwYTIxMmY3NGU5ZjEzNjFhMWJhNGE4IiwibnVtYmVyIjo4NzcwLCJ0b29rIjo3MjF9',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"locId":1282,"identifierType":"phoneNumber","identifier":"'.$telno.'"}');

$response = curl_exec($ch);

curl_close($ch);
?>

