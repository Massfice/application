<?php

require_once dirname(__DIR__,1)."/vendor/autoload.php";

use Massfice\ActionManager\ActionManagerFactory;
use Massfice\Application\System\Cleans;
use Massfice\Application\Config;

$type = Cleans::getType();
$action = Cleans::getAction();
$data = Config::getConfig();

$namespace = isset($data["_System_Action_Namespace"]) ? $data["_System_Action_Namespace"] : "\\Massfice\\Application\\";

$manager = ActionManagerFactory::create($type,$namespace);
$action = $manager->createAction($action);
$executor = $manager->createExecutor();

$executor->execute($action,$data);

?>