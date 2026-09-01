<?php

$protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off" || $_SERVER["SERVER_PORT"] == 443) ? "https://" : "http://";
$host = $_SERVER["HTTP_HOST"];
$baseDir = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\");
define("APP_URL", $protocol . $host . $baseDir);

// Live, Dev, Demo
$_app_stage = "Live";

// Database PHPNuxBill
$db_host	    = "127.0.0.1";
$db_user        = "isplzepc_nux";
$db_pass    	= "Oneemsex4u123321";
$db_name	    = "isplzepc_nux";

// Database Radius
$radius_host	    = "127.0.0.1";
$radius_user        = "isplzepc_nux";
$radius_pass    	= "Oneemsex4u123321";
$radius_name	    = "isplzepc_nux";

if($_app_stage!="Live"){
    error_reporting(E_ERROR);
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
}else{
    error_reporting(E_ERROR);
    ini_set("display_errors", 0);
    ini_set("display_startup_errors", 0);
}