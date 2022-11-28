<?php
include_once __DIR__ . "/partials/functions.php";
session_start();
$leng_pass = $_GET["lengpass"] ?? "";
$leng_pass = intval($leng_pass);

if (!empty($leng_pass)) {
    $_SESSION["lengpass"] = generator_password($leng_pass);
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>
    <main>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="form-cont">
            <form action="index.php" method="GET" class="form">
                <div class="input">
                    <label for="lengpass" class="fs-5">Lunghezza</label>
                    <input type="number" name="lengpass" id="lengpass" class="mb-3 input-width">
                </div>
                <div class="mb-1">
                    <button class="btn btn-primary" type="submit">Crea</button>
                    <button class="btn btn-danger" type="reset">Annulla</button>
                </div>
                <a class="btn btn-primary" href="print.php">Controlla</a>
            </form>
        </div>
    </main>
</body>

</html>