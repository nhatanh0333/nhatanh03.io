<?php
echo $green."Cookie Wed Acotien : $yellow";
$coo=trim(fgets(STDIN));
echo $green."Cookie Facebook : $yellow";
$cookie=trim(fgets(STDIN));


while (true){
$url = "https://acotien.com/cam-xuc-cheo";
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
//  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
"Host:acotien.com",
"upgrade-insecure-requests:1",
"user-agent:Mozilla/5.0 (Linux; Android 9; CPH1933) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.99 Mobile Safari/537.36",
"https://acotien.com/kiem-tien",
"cookie:$coo"
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$id2 = explode('<div id="', $mr2);
$id1 = explode ('">', $id2[5]);
$id = htmlspecialchars_decode($id1[0]);
echo "\e[1;37m$id\n";
//

$head = array(
"Host: mbasic.facebook.com",
"upgrade-insecure-requests: 1",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*"."/"."*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cookie: $cookie",
);
$url = "https://mbasic.facebook.com/".$id;
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$link2 = explode("location: ", $mr2);
$link1 =  explode("rdr", $link2[1]);
$link = htmlspecialchars_decode($link1[0]);

$url = $link."rdr";
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$a2 = explode("/reactions/picker/", $mr2);
$a1 = explode('"', $a2[1]);
$a = htmlspecialchars_decode($a1[0]);
$url = "https://mbasic.facebook.com/reactions/picker/".$a;

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$love2 = explode("/ufi/reaction/", $mr2);
$love1 = explode('"', $love2[$cx]);
$love = htmlspecialchars_decode($love1[0]);
$url = "https://mbasic.facebook.com/ufi/reaction/".$love;
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);

        $url = "https://acotien.com/system/nhan-tien-cam-xuc";
$data = "id=$id&loaicx=LOVE";
$curl = curl_init(); 
curl_setopt_array($curl, array( 
   CURLOPT_PORT => "443", 
  CURLOPT_URL => "$url", 
  CURLOPT_RETURNTRANSFER => true, 
  CURLOPT_ENCODING => "", 
  CURLOPT_SSL_VERIFYPEER => false, 
  CURLOPT_TIMEOUT => 30, 
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
  CURLOPT_CUSTOMREQUEST => "POST", 
  CURLOPT_POSTFIELDS => $data, 
  CURLOPT_HTTPHEADER => array(
  "user-agent:Mozilla/5.0 (Linux; Android 9; CPH1933) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.99 Mobile Safari/537.36",
  "accept:application/json, text/javascript, */*; q=0.01",
  "Host:acotien.com",
  "cookie:$coo"
       
    ) 
)); 
 
$result = curl_exec($curl); 
$err = curl_error($curl); 
curl_close($curl); 
$js = json_decode($result,true); 
$xu=$js["msg"];
echo "\e[1;32m tim $xu\n";

}