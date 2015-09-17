#!/usr/bin/php
<?php
include(__DIR__."/vendor/autoload.php");
include(__DIR__."/config.php");

$curl = new Curl;
$curl->cookie_file = __DIR__.'/cookies';

$res = $curl->post($url."/wp-login.php", ["log"=>$user, "pwd"=> $pass, "rememberme"=>"forever", "wp-submit"=>true, "redirect_to"=>$url."/wp-admin/"]);
$res = $curl->get($url."/wp-admin/update-core.php");

$updates = false;
foreach($tofind as $stf)
{
    if(strpos($res->body, $stf)===false)
    {
        $updates = true;
    }
}
if($updates==false)
{
    echo "Wordpress OK - No Updates";
    exit(0);
}
else
{
    echo "There are some updates for Wordpress";
    exit(1);
}
