<?php 
$whmusername = "haailand";
$whmpassword = "R1%h9&9JuZyb5mP";
$subdomain = 'kkdomain';
$domain = "kuchi.co.in";

$query = "https://".$domain.":2083/json-api/cpanel?cpanel_jsonapi_module=SubDomain&cpanel_jsonapi_func=addsubdomain&cpanel_jsonapi_apiversion=2&dir=/public_html/".$subdomain.".".$domain."/&rootdomain=".$domain."&domain=".$subdomain."";
//$query = "https://".$domain."2083/json-api/cpanel?cpanel_jsonapi_module=SubDomain&cpanel_jsonapi_func=addsubdomain&cpanel_jsonapi_apiversion=2&dir=/public_html/$subdomain"/&rootdomain=".$domain."&domain=".$subdomain."";
print $query;
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl, CURLOPT_HEADER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$header[0] = "Authorization: Basic " . base64_encode($whmusername.":".$whmpassword) . "\n\r";
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_URL, $deletedir);
curl_setopt($curl, CURLOPT_URL, $query);
$result = curl_exec($curl);
curl_close($curl);
print $result;
?>




