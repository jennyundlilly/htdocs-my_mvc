<?php

$routes['default_controller'] = 'home';

$routes['home'] = 'home';

$routes['product-index'] = 'product/index';
$routes['product-detail'] = 'product/detail';
$routes['product-edit/.+-(\d+).html'] = 'product/edit/$1';


$routes['admin'] = 'admin/dashboard/index';
$routes['admin/category'] = 'admin/category/index';
$routes['admin/dashborad/detail/.+-(\d+)'] = 'admin/dashborad/detail/$1';

?>