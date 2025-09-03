<?php
include '../fatfree-core-master/base.php';
include '../portfolio/class/components.php';
$app = Base::instance();
$app->route('GET /',function(){HomePage::HomePage();});
$app->route('GET /about',function(){AboutPage::AboutPage();});
$app->route('GET /skills',function(){SkillsPage::SkillsPage();});
$app->route('GET /projects',function(){ProjectsPage::ProjectsPage();});
$app->run();