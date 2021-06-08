<?php

$data_file = "data/messages.txt"; // kelias iki tekstinio failo
$validation=[];


function validate($data){
    global $validation;
    var_dump($data['name'], ucfirst($data['name']));
    if(empty($_POST['username']) || !preg_match('/^[A-Z][a-z\d_]{2,20}$/', $_POST['username'])){
    //if(empty($data['name']) || ucfirst($data['name']) != $data['name']) {
        $validation[] = "Vardas turi buti iš didžiosios";
    }
    if (!preg_match('/^{0,9}$/', $data['asmensKodas'])) {
        $validation[] = "Srydžio numeris turi susidaryti tik is skaičių";
    }
}

function storeData(){
    global $data_file;
    $content = file_get_contents($data_file); //failo turinys
    $formData = implode(',', $_POST); //konvertuojame POST masyva i string
    $content .= $formData."\n"; //ivedame po kiekvieno submit pabaiga prie formos duomenu pridedame eilutes pabaigos zenkla
    file_put_contents($data_file, $content); //rasom i txt faila formos duomenis
    var_dump($content);
}

function showData(){
    global $data_file;
    $messages = file_get_contents($data_file, true); //priskiriame failo duomenis
    return explode("\n", $messages); //konvertuojam tekstinio failo duomenis i masyva
}