<?php

require_once './smarty/libs/Smarty.class.php';
include_once 'inversion.view.php';

class PlataformaView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showPlataformas($plataformas)
    {
        $this->smarty->assign('plataformas', $plataformas);

        $this->smarty->display('plataformas.tpl');
    }
    function showPlataforma($plataforma)
    {
        $this->smarty->assign('plataforma', $plataforma);

        $this->smarty->display('plataforma.tpl');
    }

    function mostrarupdateplataforma($id)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->assign('plataformas');
        $this->smarty->display('updateplataforma.tpl');
    }

    function mostrarformplataformas($id)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->display('formplataformas.tpl');
    }

    function showError($msg)
    {
        echo "<h1> ERROR | </h1>";
        echo "<h2>$msg</h2>";
    }
}
