<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'sp390';
$sitepad['db_user'] = 'sp390';
$sitepad['db_pass'] = 'p[32qVS-4s';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'spog_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = '127.0.0.1/sp';// URL without protocol but with directory as well
$sitepad['url'] = 'http://127.0.0.1/sp';
$sitepad['relativeurl'] = '/sp';
$sitepad['.sitepad'] = 'C:\Program Files\Ampps/private';
$sitepad['sitepad_plugin_path'] = 'C:/Program Files/Ampps/ampps/scripts/sitepad';
$sitepad['editor_path'] = 'C:/Program Files/Ampps/ampps/scripts/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = '16fpl79h4jfcxavtoby65gabumiryefkhg7rf6zfeivhjecfssjllygnqgryxw1i';
$sitepad['SECURE_AUTH_KEY'] = 'lejnt80hmne9yk28inlkomgvmidsztslxiphifb58kuezxisll37oyjjatm0epib';
$sitepad['LOGGED_IN_KEY'] = 'kyshscvze1qwsm1cs1r7pzfbf0uwtyhbdpsf4tl5jhg3educlrudzsljwyhpnye8';
$sitepad['NONCE_KEY'] = 'ngq2tuh5r7khi5ifogyjs5m3vx45evejp2qb0ix8fgkewj0cwuxj75zme2wzyivh';
$sitepad['AUTH_SALT'] = 'yc0cijp9lrrcji302c7p01bdelai9ss563xaenakczmednjzt4yatdpobnbfdqrt';
$sitepad['SECURE_AUTH_SALT'] = 'lgry0rtnxzjhvxfg7yyv2bbwg39ejamd9xyhjgqtpnzkax18fgfuj4ckgridixlx';
$sitepad['LOGGED_IN_SALT'] = 'zam5qx3wtjcpgatfqrzimdn5pshcdg719lrsg4awhesfvzqgzax8wynlshbfh0kv';
$sitepad['NONCE_SALT'] = 'zm7bjn930gae28r0bjcl4uhzjst61s1xdjz0gazn82ilehmvwpj96peixobphru1';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

