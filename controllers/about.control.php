<?php

function run(){
    $viewData = array(
        "cuenta"=>"0318-1993-01395",
        "nombre"=>"Jorge Stephen Flores Oseguera",
        "correo"=>"stivenflo1993@gmail.com"
    );
    $recorridos = array(
        array("cursado"=>"Jardin de Niños", "escuela"=>"Enrique Medina Vasquez", "lugar"=>"Siguatepeque"),
        array("cursado"=>"1ro", "escuela"=>"Escuela Estados Unidos", "lugar"=>"Siguatepeque"),
        array("cursado"=>"2do", "escuela"=>"Escuela Ernestina Flores", "lugar"=>"Siguatepeque"),
        array("cursado"=>"3ro - 6to", "escuela"=>"Escuela Gregorio Donaire", "lugar"=>"El Rosario"),
        array("cursado"=>"Ciclo Comun", "escuela"=>"Escuela Ernestina Flores", "lugar"=>"El Rosario"),
        array("cursado"=>"Bachierato", "escuela"=>"Instituto Francisco Morazan", "lugar"=>"Siguatepeque"),
        array("cursado"=>"Universidad", "escuela"=>"UNICAH", "lugar"=>"Siguatepeque")
    );
    $viewData["recorridos"] = $recorridos;
    renderizar("about", $viewData);
}

run();

?>