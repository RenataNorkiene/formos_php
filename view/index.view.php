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
<div class="container mt-5">
    <section>
        <?php
        if(isset($_POST["send"])) {
            storeData();
        }
        ?>
    </section>
    <form method="post" class="mb-3" id="dispatch" name="dispatch" action="ticket.php">
            <div class="row">
                <div class="col">
                    <label>vardas</label>
                    <input type="text" class="form-control" placeholder="Vardas" name="name">
                </div>
                <div class="col">
                    <label>Pavardė</label>
                    <input type="text" class="form-control" placeholder="Pavardė" name="lastName">
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <div class="col">
                    <label>Asmens kodas</label>
                    <input type="text" class="form-control" placeholder="Asmens kodas" name="asmensKodas">
                </div>
                <div class="col">
                    <label>Skrydžio numeris</label>
                    <select class="form-control"  id="flightNumSelect" name="flightNumber">
                        <option value="" disabled selected >Pasirinkite skrydžio numerį</option>
                        <?php for ($i=0; $i < count($flightsNumbers); $i++): ?>
                        <option value="<?=$flightsNumbers[$i];  ?>"><?=($flightsNumbers[$i]); ?>
                            <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label>Skrendu iš:</label>
                    <select id="inputDestinationFrom" class="form-control" name="destinationFrom">
                        <option value="" disabled selected >Pasirinkite iš kur skrendate</option>
                        <?php for ($i=0; $i < count($destination_from); $i++): ?>
                        <option value="<?=$destination_from[$i];  ?>"><?=($destination_from[$i]); ?>
                            <?php endfor; ?>
                    </select>
                </div>
                <div class="col">
                    <label>Skrendu į:</label>
                    <select id="inputDestinationTo" class="form-control" name="destinationTo">
                        <option value="" disabled selected >Pasirinkite kur skrendate</option>
                        <?php for ($i=0; $i < count($destination_to); $i++): ?>
                        <option value="<?=$destination_to[$i];  ?>"><?=($destination_to[$i]); ?>
                            <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label>Kaina</label>
                    <input type="text" class="form-control" placeholder="įveskite kainą" name="kaina">
                </div>
                <div class="col">
                    <label>Bagažas</label>
                    <select class="form-control"  id="bagsSelect" name="bag">
                        <option value="" disabled selected >Pasirinkite bagažo dydį</option>
                        <?php for ($i=0; $i < count($bags); $i++): ?>
                        <option value="<?=$bags[$i];  ?>"><?=($bags[$i]); ?>
                            <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Pastabos</label>
                <textarea class="form-control" id="message"  rows="2" name="message" > </textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="send">Spausdinti</button>
    </form>


</div>