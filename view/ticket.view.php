<?php
$kaina = $_POST['kaina'];
$bagazas = $_POST['bag'];
if($bagazas>20){
    $kaina+=30;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>formos</title>
</head>
<body>
<div class="card bg-warning card w-50">
    <div class="card-header p-3 mb-2 bg-warning text-dark ">
       <h5 class="font-weight-bold ">Duomenys apie jūsų kelionę</h5>
     </div>
    <div class="d-flex flex-row bd-highlight">
    <div class="card w-50 p-3 bg-light text-dark">
        <div class="card-body d-inline">
            <h5 class="card-title font-weight-bold mb-5"><?php echo date("Y-m-d")?></h5>
            <h5 class="card-title font-weight-bold"> Skrydžio numeris: <?php echo $_POST['flightNumber']?></h5>
            <h5 class="card-title font-weight-bold mt-5"> asmens kodas: <?php echo $_POST['asmensKodas']?></h5>
        </div>
    </div>
    <div class="card w-5 p-3 bg-light text-dark">
        <div class="card-body d-inline p-3">
            <h5 class="card-title font-weight-bold">Srydis iš: <?php echo $_POST['destinationFrom']?></h5>
            <h5 class="card-title font-weight-bold">Srydis į: <?php echo $_POST['destinationTo']?></h5>
        </div>
    </div>
    <div class="card w-10 p-3 bg-secondary text-dark">
        <div class="card-body d-inline ">
            <h5 class="card-title font-weight-bold">Apmokėjimo duomenys</h5>
            <p class="card-text">skrydis</p>
            <p class="card-text mb-5">bagažas</p>
            <h4 class="card-text ">Galutinė kaina</h4>
        </div>
    </div>
    <div class="card-body card w-25  p-3  bg-secondary text-dark">
        <h5 class="card-title font-weight-bold mt-3 ">Kaina, eur/ bagažas, kg</h5>
        <p class="card-text mt-2"><?=$_POST['kaina']?></p>
        <p class="card-text mb-5"><?=$_POST['bag']?></p>
        <p class="card-text font-weight-bold display-4"><?=$kaina?></p>
    </div>
    </div>
</div>
</body>
</html>
