<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\EtudiantController;
use App\Controllers\CoursController;
use App\Controllers\InscriptionController;

$homeController = new HomeController();
$etudiantController = new EtudiantController();
$coursController = new CoursController();
$inscriptionController = new InscriptionController();

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        $homeController->index();
        break;
    case '/etudiants':
        $etudiantController->index();
        break;
    case '/etudiants/create':
        $etudiantController->create();
        break;
    case '/cours':
        $coursController->index();
        break;
    case '/cours/create':
        $coursController->create();
        break;
    case '/inscriptions':
        $inscriptionController->index();
        break;
    case '/inscriptions/create':
        $inscriptionController->create();
        break;
    default:
        http_response_code(404);
        echo "Page non trouvée";
        break;
}