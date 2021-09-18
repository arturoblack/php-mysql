<?php
define('ROOTPATH', dirname(__FILE__));
require_once ROOTPATH.'/lib/SimpleTemplateEngine/loader.php';
$env = new SimpleTemplateEngine\Environment('./src/views');

echo $env->render('index.php', []);

?>
