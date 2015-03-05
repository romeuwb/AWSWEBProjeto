<?php

include './corp/Smarty/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = "smarty/templates";
$smarty->compile_dir = "smarty/templates_c";
$smarty->config_dir = "smarty/configs";
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->display('./template/contact.html');