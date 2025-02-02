<?php
$salt = md5(rand(1, 9));
                                            $result = substr($salt, 1, 10);
                                            $email = $result . "@gmail.com";
                                            $headr = array();
                                            $headr[] = 'Mobileclient: IOS';
                                            $headr[] = 'Content-Type: application/json';
                                            $headr[] = 'Accept: */*';
                                            $headr[] = 'Authorization: api_key=iphone,api_hash=9f55d44e2aa28322cf84b5816bb20461,api_random=686A1491-041F-4138-865F-9E76BC60367F';
                                            $headr[] = 'Clientversion: 163';
                                            $headr[] = 'Accept-Encoding: gzip, deflate';
                                            $headr[] = 'User-Agent: n11/1 CFNetwork/1335.0.3 Darwin/21.6.0';
                                            $headr[] = 'Accept-Language: tr-TR,tr;q=0.9';
                                            $headr[] = 'Connection: close';
                                            $url = 'https://mobileapi.n11.com:443/mobileapi/rest/v2/msisdn-verification/init-verification?__hapc=F41A0C01-D102-4DBE-97B2-07BCE2317CD3';
                                            $data = array("__hapc" => "", "_deviceId" => "696B171-031N-4131-315F-9A76BF60368F", "channel" => "MOBILE_IOS", "countryCode" => "+90", "email" => $email, "gsmNumber" => $telno, "userType" => "BUYER");
                                            $postdata = json_encode($data);
                                            $ch = curl_init($url);
                                            curl_setopt($ch, CURLOPT_POST, 1);
                                            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                            curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
                                            curl_setopt($ch, CURLOPT_USERAGENT, "n11/1 CFNetwork/1335.0.3 Darwin/21.6.0");
                                            $result = curl_exec($ch);
                                            curl_close($ch);

?>