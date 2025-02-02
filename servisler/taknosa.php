<?php
require_once('utils.php');

$csrf = "e3618a4a-33d0-4a6c-b67e-daee985b6741";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.teknosa.com/login/register/sendValidationCode');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/javascript, */*; q=0.01',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'origin: https://www.teknosa.com',
    'priority: u=1, i',
    'referer: https://www.teknosa.com/login',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-requested-with: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'JSESSIONID=504946B594683BAE65B86029D76BDDAE.accstorefront-76df886667-9qjgw; userCartInfo=0-0-0; anonymous-consents=%5B%5D; ROUTE=.accstorefront-76df886667-9qjgw; __cf_bm=jFQf9wOWJRP_4SolUrk2w.D_IE8uzQmRkY.MtGd4VDg-1735136635-1.0.1.1-m1g44dPrAVpiw2V6kSuNRta0g3Ccc9Vu2YB9f3gxt_SvtSvmonJ12ZYZoA2iIz6zisZu7jwOmla.27WZs2nQqQ; _cfuvid=RmKtEpjaRz7mSrGr1twosE5NuMKVIhtBBOgkz1kxUCI-1735136635572-0.0.1.1-604800000; RMAUserID=211ca3a2-47cb-40dd-894a-810a8900662b; _gcl_au=1.1.1972840230.1735136638; _ga_SERVER123=GS1.1.1735136638.1.0.1735136638.0.0.632680338; _ga=GA1.1.1469188977.1735136638; _pk_ref.1.1357=%5B%22%22%2C%22%22%2C1735136639%2C%22https%3A%2F%2Fwww.google.com%2F%22%5D; _pk_id.1.1357=eec006f796e1fd17.1735136639.; _pk_ses.1.1357=1; FPID=FPID2.2.0Zu2M1M7d%2Fgqclk6vdoyiaUvZbRzu7XkSDmSk0zFMz8%3D.1735136638; FPLC=MMfz1X1HfWMVfnmK4hMTyJS1zTJp3YXMZtP4%2Fe47E%2By7DabYZDLK%2Fj1U76LBTbTLuII2fOkrdW7B0Uso90uvGAqw71VgBmj7GKFtvQ1X6P33FZZ2Diue8CdI%2F5kwiQ%3D%3D; FPGSID=1.1735136637.1735136637.G-FMDRLJN05Q.m0-SHPjPj5TJialB2c3E-Q; mf_5f950997-3caf-41c7-9bf9-0782c7e3efd7=||1735136638782||0||||0|0|75.33434; _clck=d1n6gg%7C2%7Cfs0%7C0%7C1820; _uetsid=e1750b80c2cb11efafa0cf37385ae70b|1aesdaj|2|fs0|0|1820; _uetvid=9f7790b0186e11efb1a1cf41c6325321|16r369l|1735136639476|1|1|bat.bing.com/p/insights/c/u; _clsk=1qcf371%7C1735136639522%7C1%7C0%7Cu.clarity.ms%2Fcollect; _tt_enable_cookie=1; _ttp=Nv3UbWhufRfxKcr9_zOF3nJTH6Y.tt.1; _ga_6FW5RQ62HT=GS1.1.1735136638.1.0.1735136647.51.0.0; _ga_K72QB8D6RV=GS1.1.1735136638.1.1.1735136681.17.0.1239401234; mnuid=HwMCWGdsFaibbrEPAwMNAg==');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'phoneNumber='.$telno.'&email='.$email.'&CSRFToken='.$csrf.'');

$response = curl_exec($ch);

curl_close($ch);
?>

