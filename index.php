<?php
include_once __DIR__ . "/partials/functions.php";
$leng_pass = $_GET["lengpass"] ?? "";
$leng_pass = intval($leng_pass);

$result = generator_password($leng_pass);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <main>
        <form action="index.php" method="GET">
            <label for="lengpass">Lunghezza</label>
            <input type="number" name="lengpass" id="lengpass">
            <div>
                <button type="submit">Crea</button>
                <button type="reset">Annulla</button>
            </div>
        </form>
        <div class="resalt">
            <h2><?php echo $result; ?></h2>
        </div>
    </main>
</body>

</html>