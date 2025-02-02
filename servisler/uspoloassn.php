<?php
require_once('utils.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://tr.uspoloassn.com/users/registration/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'origin: https://tr.uspoloassn.com',
    'priority: u=1, i',
    'referer: https://tr.uspoloassn.com/login/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
    'x-requested-with: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'csrftoken=6hb2e5SSNtsV1ZoOQVfLW2di25LbuCUnJW3Nd4U0EI6MSi1wjgv52cf67T1XMy5e; ajs_group_id=null; ajs_user_id=%22None%22; ajs_anonymous_id=%22954cfd71-d26a-43b3-96a4-0da3bbee1965%22; _gcl_au=1.1.812173748.1734455371; a1ashgd=i44pvytudpf00000i44pvytudpf00000; _ga=GA1.1.711519210.1734455372; FPID=FPID2.2.h%2B%2BY2NUCOdPp9GhPAD3wRgNOqlL2s15Yb7Haq%2F2DIa0%3D.1734455372; FPAU=1.1.812173748.1734455371; _tt_enable_cookie=1; _ttp=UVQMCFRucBAzaw8iDFJ3-McWKs5.tt.1; osessionid=1m5x5tuxnuqdzfdt69u8mpwd0ewby6f7; _gcl_gs=2.1.k1$i1734969197$u236598468; strw-749-vt=1_1734455372037; FPGCLAW=2.1.kCj0KCQiAsaS7BhDPARIsAAX5cSCTdK1f1Pa4x-x7qAY0-AkPdXiExM-uMe0zQKMQ3BgEuNIJdo6QfK8aAl80EALw_wcB$i1734969201; FPGCLGS=2.1.k1$i1734969197; OfferMiner_ID=TFQFPLEHRVKICQNH20241223185321; _clck=1xj0ndh%7C2%7Cfry%7C0%7C1812; FPLC=J1YKVYG7nvaCgrFB4VaVmTfDL0exypDhL04nqgFRu5riJv8UoTX1CbeIHcvymMgBELeXYFZT9sOD9RUh5QQfR%2FqoE9z5PC0oo61riLZk%2Bczu0%2FxfzYLmXxTPBToc8A%3D%3D; FPGSID=1.1734969201.1734969201.G-MHTMTY9XQC._R7EY0_SK_p2eXG3X0NIRA; _gcl_aw=GCL.1734969205.Cj0KCQiAsaS7BhDPARIsAAX5cSCTdK1f1Pa4x-x7qAY0-AkPdXiExM-uMe0zQKMQ3BgEuNIJdo6QfK8aAl80EALw_wcB; _ga_MHTMTY9XQC=GS1.1.1734969200.2.1.1734969208.0.0.2102742295; strw-749-tpvc=6; strw-749-spvc=3; _clsk=13z7lpm%7C1734969209079%7C3%7C1%7Co.clarity.ms%2Fcollect; strw-749-ttt=234; strw-749-stt=75; strw-749-ptt=75');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'csrfmiddlewaretoken=8x6JSveS8mCZRtBpiWBuf36Xkx36Nrl5LcYuRug0ZBgQIMe7LhROld8LpljS5nwW&first_name='.$adın.'&last_name='.$soyadın.'&email='.$email.'&phone=0'.$telno.'&date_of_birth=2000-11-22&password=_pu-aq*X3ggY-W&password2='.$pass.'&confirm=true&sms_allowed=false&email_allowed=false&call_allowed=false');

$response = curl_exec($ch);

curl_close($ch);
?>