<?php
require_once('utils.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://frontend.dominos.com.tr/api/customer/sendOtpCode-v2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json, text/plain, */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'appversion: WEB-3.0',
    'authorization: Bearer',
    'content-type: application/json',
    'origin: https://www.dominos.com.tr',
    'priority: u=1, i',
    'referer: https://www.dominos.com.tr/',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'FPID=FPID2.3.LWiGgREiAXeRRJqaL%2BuuTDHEM%2FiAwL2jjh8OL6edZjQ%3D.1715685534; _fbp=fb.1.1715685537846.6602565036; _gcl_aw=GCL.1734962590.Cj0KCQiAsaS7BhDPARIsAAX5cSDCGP-SqmBmLYuBm8ypCVBatq-fma8ZjnKjFLbiM2VvVfMKd03R4CkaAmMZEALw_wcB; _gcl_gs=2.1.k1$i1734962588$u113486098; _gcl_au=1.1.481027244.1734962590; _gac_UA-17245792-16=1.1734962590.Cj0KCQiAsaS7BhDPARIsAAX5cSDCGP-SqmBmLYuBm8ypCVBatq-fma8ZjnKjFLbiM2VvVfMKd03R4CkaAmMZEALw_wcB; _tt_enable_cookie=1; _ttp=b6Ma7LzgQKVCsU0A0uyETkdXk1e.tt.2; _gac_UA-17245792-1=1.1734962591.Cj0KCQiAsaS7BhDPARIsAAX5cSDCGP-SqmBmLYuBm8ypCVBatq-fma8ZjnKjFLbiM2VvVfMKd03R4CkaAmMZEALw_wcB; Dominos.appVersionPublic=1.4.35; _cfuvid=eyVOnMJEWcCdTnaZ2X8PcJ.4Uoov5UGv9t_gTGgkuko-1737893372621-0.0.1.1-604800000; _clck=10vab1q%7C2%7Cfsw%7C0%7C1852; cf_clearance=MxxNaPrVtPSHMqvwXCDha.F7KW9qbyd6asmKJYqE2f8-1737893373-1.2.1.1-kJbo1RodJPwvgW.EsKzgs_aFH1a0AX3dSmLz_oXzw2Doh2ebnR4yQIBPjo3bWtVlkFV0FhVi1GKZlEBPI4Gx2EdK012Vfh4FBeAdPkjTAK.WTS7HW3RSFv.Zgw_9SSHEpy0CO_dxLkPyUA7k3hbumCLC18pyi16qDlTbS7MahyesIsAUkIAmjJLjgDHUmpQoApVIKGCOARSLJKKwponwPLwHLJlyPGq.56NfznbXK8Mn0GuWAOG03e7JDG0eP6QW.kuaX.voereYLd0bQYNxbEaH2BK.ZsuQkWWQTX0Wn0E; _gid=GA1.3.252123472.1737893374; _gat_UA-17245792-1=1; _gat_UA-17245792-16=1; _ga_V3FP2T8LNY=GS1.1.1737893374.2.0.1737893374.0.0.1642246774; _ga_GNBX2QF70V=GS1.3.1737893374.2.0.1737893374.60.0.0; FPLC=h%2BlrC3XxLJG09f2vjV42P%2BzvBCjRDt0Cjz0e8YxpDTbzXK9tg5iLkSNvmTUYvmOD4Jds5eEc8Blp7ddYim9hUash3c3w9N7c4nNBiUdKBCcVXuIRkeramjGhawup0Q%3D%3D; _ga=GA1.3.1552019984.1734962590; _clsk=1le1foe%7C1737893379951%7C2%7C1%7Cb.clarity.ms%2Fcollect; _ga_LWC58P6H8G=GS1.1.1737893374.2.1.1737893420.14.0.0');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"","mobilePhone":"'.$telno.'","captchaToken":"03AFcWeA6232LnCBsuxZbjqr6JFV4TPwa7m5pvL7ITfx_xy0BGzbOpV2_wqpZHzCbaElcpYDnQTasv-M8idBWfbSEEZ_II7NrgHe4F8tzsQgOdGatdnh8ZbuDxOsGjKzMx70Ogv3oEklumkmhYOfGdV05V5qH5VTSCua7Wj3DfH0jC5S4YQhVqG08yCEUQ_zDxi3zd830EzRHSKRsG8iXJCIGLRTEN1i2Qo-GuMRQ446UB9UDx5km3aAk7RvzPU1peOHiab3g7OE7CV4aiMJOW9CppmjldRQd2AOc82AD1XS6r0IQnCVQVCgj74TdiDN7c1Lv4q9zNhI829rubmFFeMzY3lo99Y8ZkHnzkXCnUEFcO8t8ls4a6T51-3i5hlcNGYawcv0DeJe4Zvew6ycYLEldi14yeKheNMBF3ZZVDijNrHwoswHSqquL_KR77kvUe4-ANaHixEsQBZyw7jWp_PKyCONCKrd2DCVe8T-CnUX0V-Tip2BCR9EFiLanrErNmm6ff2gJDlEojEv4Oq_6RMPVoWC_G5tzJXMP7MLxeZ8lq_9Y2heRNkFzAMdw-FuaEfh3-qobdr-2hAmFpQ48RD_f_J6CdQaGro0yYsayYgZbWAhN6rjfOTxWVQukngUxSAsCSQ_nbhq7W8bvr3jMxWZ7U8iEL1enDQUbpXen6dEdCkc0J_bIzl9RRbL0yY3izjqwbPlYCXtw-hUGAGI6wZyBUp-bRdoASOzKahggEaRc6w3zqec9H0WJgqfI51IMFIx3zqE_Lr-lGG7r1YShvfkoru5atsjYXJhP6jyNqn9q7Hlx1DMN8Mm7UGAUqQTxtWZKLk9khlGvbnclRwuqhE7AgLOkfMZ-Rc9rQXBMKGLGf-7lyun-v4xfS3NpZk__5abpz6sbd_9x8","isSure":false,"isRegisterV2":true,"channelCode":"WEB"}');

$response = curl_exec($ch);

curl_close($ch);
?>