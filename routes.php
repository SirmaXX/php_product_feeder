<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// Genel sayfalar
get('/', 'views/index.php');
get('/anasayfa', 'views/index.php');
get('/info', 'views/info.php');

// Json
get('/Json/items/$id', 'Json/get-item.php');
get('/Json/items', 'Json/items.php');
get('/Json/items/delete/$id', 'Json/delete-item.php');
post('/Json/items/add/$name/$price/$category', 'Json/add-item.php');

// Xml
get('/Xml/items/$id', 'Xml/get-item.php');
get('/Xml/items', 'Xml/items.php');
get('/Xml/items/delete/$id', 'Xml/delete-item.php');
post('/Xml/items/add/$name/$price/$category', 'Xml/add-item.php');

// Hata sayfaları
any('/404','views/404.php');
?>
