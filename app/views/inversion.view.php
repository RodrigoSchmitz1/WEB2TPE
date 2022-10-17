<?php

require_once './smarty/libs/Smarty.class.php';
include_once 'plataforma.view.php';

class InversionView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showInversiones($inversiones)
    {
        $this->smarty->assign('inversiones', $inversiones);

        $this->smarty->display('inversiones.tpl');
    }

    function showInversion($inversion)
    {
        $this->smarty->assign('inversion', $inversion);

        $this->smarty->display('inversion.tpl');
    }

    function mostrarupdate($id, $plataformas){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('plataformas', $plataformas);
        $this->smarty->display('updateinversiones.tpl');
    }
    function mostrarforminversiones($id, $plataformas)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->assign('plataformas', $plataformas);
        $this->smarty->display('forminversiones.tpl');
    }

    function showError($msg)
    {
        echo "<h1> ERROR | </h1>";
        echo "<h2>$msg</h2>";
    }
}
