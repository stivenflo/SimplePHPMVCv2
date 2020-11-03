<?php
require_once "libs/sao.php";

function getAllCategorias(){
    $sqlstr = "SELECT * from categorias;";
    $resultSet = array();
    $resultSet = obtenerRegistros($sqlstr);
    return $resultSet;
}

function getCategoriaByCode($catecod) {
    $sqlstr = "SELECT * from categorias where catecod = %d;";
    return obtenerUnRegistro(sprintf($sqlstr, $catecod));
}

function addNewCategoria($catenom, $cateest){
    $insSql = "INSERT INTO `categorias` (`catenom`, `cateest`)
VALUES ( '%s', '%s');";

    return ejecutarNonQuery(
        sprintf(
            $insSql,
            $catenom,
            $cateest
        )
    );
}

function updateCategoria ($catenom, $cateest){
    $updsql = "UPDATE `categorias` SET `catenom` = '%s', `cateest` = '%s' WHERE `catecod` = '%d'";

    return ejecutarNonQuery(
        sprintf(
            $updsql,
            $catenom,
            $cateest
        )
    );
}

?>