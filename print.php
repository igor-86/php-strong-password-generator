<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>

<body>
    <div class="resalt">
        <h2>La password che hai generato è:</h2>
        <h2><?php echo $_SESSION["lengpass"]; ?></h2>
    </div>
</body>

</html>