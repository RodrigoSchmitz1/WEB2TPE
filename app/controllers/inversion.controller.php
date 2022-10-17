<?php
require_once 'app/models/inversion.model.php';
require_once 'app/views/inversion.view.php';
require_once './app/helper/helper.php';


class InversionController
{

    private $model;
    private $plataformamodel;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new InversionModel();
        $this->plataformamodel = new PlataformaModel();
        $this->view = new InversionView();
        $this->authHelper = new AuthHelper();
    }

    function showInversiones()
    {
        session_start();
        $inversiones = $this->model->getInversiones();

        foreach ($inversiones as $inversion) {
            $plataforma = $this->plataformamodel->get($inversion->id_plataformas_fk);
            $inversion->id_plataformas_fk = $plataforma->nombre;
        }

        $this->view->showInversiones($inversiones);
    }

    function showInversionesPorPlataforma($id)
    {
        session_start();
        $inversiones = $this->model->getByPlataforma($id);
        $this->view->showInversiones($inversiones);
    }

    function showInversion($id)
    {
        session_start();
        $inversion = $this->model->get($id);

        $this->view->showInversion($inversion);
    }

    function addInversion()
    {
        $this->authHelper->checkLoggedIn();
        $moneda = $_POST['moneda'];
        $interes = $_POST['interes'];
        $id_plataformas_fk = $_POST['plataforma'];


        if (empty($moneda) || empty($interes)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        $id = $this->model->insert($moneda, $interes, $id_plataformas_fk);
        header("Location: " . BASE_URL);
    }

    function update($id){
        $this->authHelper->checkLoggedIn();
        $moneda = $_POST['moneda'];
        $interes = $_POST['interes'];
        $plataforma = $_POST['id_plataformas_fk'];
        $this->model->update($id, $moneda, $interes, $plataforma);
        header("Location: " . BASE_URL);
    }

    function mostrarupdate($id){
        $this->authHelper->checkLoggedIn();
        $plataformas = $this->plataformamodel->getPlataformas();
        $this->view->mostrarupdate($id, $plataformas);
    }
    function mostrarforminversiones($id)
    {
        $this->authHelper->checkLoggedIn();
        $plataformas = $this->plataformamodel->getPlataformas();
        $this->view->mostrarforminversiones($id, $plataformas);
    }

    function deleteinversion($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->remove($id);
        header("Location: " . BASE_URL);
    }
}
