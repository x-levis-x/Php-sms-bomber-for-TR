<?php


$salt = md5(rand(1, 9));
                                            $result = substr($salt, 1, 10);
                                            $email = $result . "@gmail.com";

                                      function generateStrongPassword($length = 9) {
                                                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+';
                                                $charactersLength = strlen($characters);
                                                $randomString = '';
                                            
                                                for ($i = 0; $i < $length; $i++) {
                                                    $randomString .= $characters[random_int(0, $charactersLength - 1)]; 
                                                }
                                            
                                                return $randomString;
                                            }
                                            
                                            $pass = generateStrongPassword(); 




    $ad = ["Hasanae", "Yakurme", "Davutağa", "Ayhanbey", "Halile", "Mahmuta"];
$soyad = ["Keser", "Seven", "Yanık", "Anık", "Davul", "Özer"];

$mesajSayisi = count($ad);
$mesajSayisi2 = count($soyad);


$rastgeleIndeks = rand(0, $mesajSayisi - 1);
$rastgeleIndeks2 = rand(0, $mesajSayisi2 - 1);


$adın = $ad[$rastgeleIndeks];
$soyadın = $soyad[$rastgeleIndeks2];

$tamper = $adın . " " . $soyadın;


?>