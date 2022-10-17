<?php

require_once 'app/controllers/inversion.controller.php';
require_once 'app/controllers/plataforma.controller.php';
require_once 'app/controllers/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'inversiones';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inversiones' :
        $inversionController = new InversionController();
        $inversionController->showInversiones();
        break;
    case 'inversion':
        $id = $params[1];
        $inversionController = new InversionController();
        $inversionController->showInversion($id);
        break;
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'plataformas':
        $plataformasController = new PlataformaController();
        $plataformasController->showPlataformas();
        break;
    case 'plataforma':
        $id = $params[1];
        $plataformasController = new PlataformaController();
        $plataformasController->showPlataforma($id);
        break;
    case 'addinversion':
        $inversionController = new InversionController();
        $inversionController->addInversion();
        break;
    case 'addplataforma':
        $plataformaController = new PlataformaController();
        $plataformaController->addPlataforma();
        break;
    case 'inversionesPlataforma':
        $id=$params[1];
        $inversionController = new InversionController();
        $inversionController->showInversionesPorPlataforma($id);
        break;
    case 'deleteinversion':
        $id = $params[1];
        $inversionController = new InversionController();
        $inversionController->deleteinversion($id);
        break;
    case 'deleteplataforma':
        $id = $params[1];
        $plataformaController = new PlataformaController();
        $plataformaController->deleteplataforma($id);
        break;
    case 'mostrarupdateinversion':
        $id = $params[1];
        $inversionController = new InversionController();
        $inversionController->mostrarupdate($id);
        break;
    case 'guardarinversion':
        $id = $params[1];
        $inversionController = new InversionController();
        $inversionController->update($id);
        break;
    case 'mostrarupdateplataforma':
        $id = $params[1];
        $plataformaController = new PlataformaController();
        $plataformaController->mostrarupdate($id);
        break;
    case 'guardarplataforma':
        $id = $params[1];
        $plataformaController = new PlataformaController();
        $plataformaController->update($id);
        break;

    case 'mostrarforminversiones':
        $id = $params [1];
        $inversionController = new InversionController();
        $inversionController->mostrarforminversiones($id);
        break;
    case 'mostrarformplataformas':
        $id = $params [1];
        $plataformaController = new PlataformaController();
        $plataformaController->mostrarformplataformas($id);
        break;

}
