<?php
require_once "libs/sao.php";

function getAllCategorias(){
    $sqlstr = "SELECT * from categorias;";
    $resultSet = array();
    $resultSet = obtenerRegistros($sqlstr);
    return $resultSet;
}

?>