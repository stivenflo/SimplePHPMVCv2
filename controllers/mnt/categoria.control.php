<?php

require_once "models/mnt/categorias.model.php";

function run(){
    $viewData=array();
    $viewData["mode"] = "";
    $viewData["modedsc"] = "";
    $viewData["catecod"] = 0;
    $viewData["catenom"] = "";
    $viewData["cateest"] = "";

    $viewData["categoriaestatus_ACT"] = "selected";
    $viewData["categoriaestatus_INA"] = "";

    $viewData["readonly"] = "";

    $modedsc = array(
        "INS"=>"Nueva Categoria",
        "UPD"=>"Actualizar Categoria %s",
        "DSP"=>"Detalle de la Categoria %s",
    );
    if (isset($_GET["mode"])) {
        $viewData["mode"] = $_GET["mode"];
        $viewData["catecod"] = intval($_GET["catecod"]);
        if (!isset($modedsc[$viewData["mode"]])){
            redirectWithHtmlMessage("No se puede realizar dicha operacion.", "index.php?page=categorias");
            die();
        }
    }
    if (isset($_POST["btnsubmit"])){
        mergeArrayTo($_POST, $viewData);
        switch ($viewData["mode"]){
        case "INS":
            $result = addNewCategoria( 
                $viewData["catenom"],
                $viewData["cateest"]);
            if ($result > 0) {
                redirectWithHtmlMessage("Guardado", "index.php?page=categorias");
                die();
            }
            break;
        case "UPD":
            $result = updateCategoria(
                $viewData["catenom"],
                $viewData["cateest"]
            );
            if($result >= 0){
                redirectWithHtmlMessage("Actualizado", "index.php?page=categorias");
                die();
            }
        break;
        }
    }

    if ($viewData["mode"] === "INS"){
        $viewData["modedsc"] = $modedsc[$viewData["mode"]];
    } else {
        $categoriaDBData = getCategoriaByCode($viewData["catecod"]);
        mergeFullArrayTo($categoriaDBData, $viewData);

        $viewData["modedsc"] = sprintf($modedsc[$viewData["mode"]], $viewData["catenom"]);

        $viewData["categoriaestatus_ACT"] = ($viewData["cateest"]=="ACT")?"selected":"";
        $viewData["categoriaestatus_INA"] = ($viewData["cateest"]=="INA")?"selected":"";

        if ($viewData["mode"] != 'UPD'){
            $viewData["readonly"] = "readonly";
        }
    }
    renderizar("mnt/categoria", $viewData);
}

run();

?>