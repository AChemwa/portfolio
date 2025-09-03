<?php
include '../fatfree-core-master/base.php';
include '../portfolio/class/components.php';
$app = Base::instance();
$app->route('GET /',function(){HomePage::HomePage();});


$app->run();