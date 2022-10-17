<?php
require_once 'app/models/plataforma.model.php';
require_once 'app/views/plataforma.view.php';
require_once './app/helper/helper.php';

class PlataformaController
{

    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new PlataformaModel();
        $this->view = new PlataformaView();
        $this->authHelper = new AuthHelper();

    }

    function showPlataformas()
    {
        session_start();
        $plataformas = $this->model->getPlataformas();

        $this->view->showPlataformas($plataformas);
    }

    function showPlataforma($id) {
        session_start();
        $plataforma = $this->model->get($id);

        $this->view->showPlataforma($plataforma);

}

    function addPlataforma()
    {
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $anios_activo = $_POST['anios_activo'];

        if (empty($nombre) || empty($anios_activo)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        $id = $this->model->insert($nombre, $anios_activo);
         header("Location: " . BASE_URL); 
    }

    function update($id)
    {
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $anios_activo = $_POST['anios_activo'];
        $this->model->update($id, $nombre, $anios_activo);
        header("Location: " . BASE_URL);
    }

    function mostrarupdate($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->view->mostrarupdateplataforma($id);
    }

    function mostrarformplataformas($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->view->mostrarformplataformas($id);
    }
    
    function deleteplataforma($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->remove($id);
        header("Location: " . BASE_URL);
    }
}
    

 

