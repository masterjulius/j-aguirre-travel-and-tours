<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$third_party_URL = base_url( '/public');
$separator = ' &mdash; ';
$site_title = isset($config_metadatas) && $config_metadatas != false ? $config_metadatas->conf_site_name : 'J.Aguirre Travel and Tours';
$site_desc = isset($config_metadatas) && $config_metadatas != false ? $config_metadatas->conf_site_description : 'Just a travel agency website';
$config_title = isset($page_title) ? $page_title : $site_title . $separator . $site_desc;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">

	<title><?php echo $config_title ?></title>

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/css/bootstrap.min.css">
<?php
	$arr_dashboard_controllers = array('administrator', 'promo', 'visa', 'users');
	$custom_CSS = ( in_array($this->uri->segment(1), $arr_dashboard_controllers) ) ? 'style' : 'style.min';
?>
	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/css/<?php echo $custom_CSS ?>.css">

	<!--Import slick-->
	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/third_party/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/third_party/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $third_party_URL ?>/third_party/materialcard/dist/material-cards-auto-height.css">

	
</head>
<body>