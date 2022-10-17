<?php

class InversionModel
{

    private $db;

    function __construct()
    {
        $this->db = $this->connect();
    }

    private function connect()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=tpe;charset=utf8', 'root', '');
        return $db;
    }

    function getInversiones()
    {
        $query = $this->db->prepare('SELECT * FROM inversion');
        $query->execute();

        $allInversiones =  $query->fetchAll(PDO::FETCH_OBJ);

        return $allInversiones;
    }
    function get ($id) {
        $query = $this->db->prepare('SELECT * FROM inversion WHERE id = ?');
        $query->execute([$id]);

        $inversion = $query->fetch(PDO::FETCH_OBJ);
        
        return $inversion;
    }

    function getByplataforma($id){
        $query = $this->db->prepare('SELECT * FROM inversion WHERE id_plataformas_fk = ?');
        $query->execute([$id]);

        $inversion = $query->fetchAll(PDO::FETCH_OBJ);

        return $inversion;
    }

    function insert($moneda, $interes, $id_plataformas_fk)
    {
        $query = $this->db->prepare('INSERT INTO inversion (moneda, interes, id_plataformas_fk) VALUES (?, ?, ?)');
        $query->execute([$moneda, $interes, $id_plataformas_fk]);

        return $this->db->lastInsertId();
    }
    
    function remove($id){

        $query = $this->db->prepare('DELETE FROM inversion WHERE id = ?');
        $query->execute([$id]);
    }
    function update($id, $moneda, $interes, $id_plataformas_fk) {
        $query = $this->db->prepare('UPDATE inversion SET moneda = ?, interes = ?, id_plataformas_fk= ? WHERE id= ?');
        $query->execute([$moneda, $interes, $id_plataformas_fk, $id]);
    }
    
}
