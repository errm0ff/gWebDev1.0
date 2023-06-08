<?php
session_start();
define("ROOT", $_SERVER['DOCUMENT_ROOT'].'/examen1_1');
define("CONTROLLER_PATH", ROOT. "/controllers/");
define("MODEL_PATH", ROOT. "/models/");
define("VIEW_PATH", ROOT. "/views/");
define("UTILS", ROOT. "/utils/");
require_once 'dbconn.php';
require_once 'route.php';
require_once UTILS. 'Utils.php';
require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';

Routing::CreateRoute();
