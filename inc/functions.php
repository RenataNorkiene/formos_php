<?php

$data_file = "data/messages.txt"; // kelias iki tekstinio failo



function storeData(){
    global $data_file;
    $content = file_get_contents($data_file); //failo turinys
    $formData = implode(',', $_POST); //konvertuojame POST masyva i string
    $content .= $formData."\n"; //ivedame po kiekvieno submit pabaiga prie formos duomenu pridedame eilutes pabaigos zenkla
    file_put_contents($data_file, $content); //rasom i txt faila formos duomenis
    var_dump($content);
}

