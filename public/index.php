

<?php
require __DIR__ . '/../src/Controller/ItemController.php';

require __DIR__ . '/../vendor/autoload.php';

$itemController=new \Controller\ItemController();
$itemController->index();


