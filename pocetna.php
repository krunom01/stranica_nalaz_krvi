<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Analiza nalaza krvi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>

		<div class="login">

            <p class="dobroDosli">Dobro došli na stranicu koja analizira Vaš nalaz krvi!</p>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <input type="submit" name="submit" value="Kreni!" >
            </form>
            

        </div>			
    <?php
    if(isset($_POST["submit"])){
    session_start();

    $_SESSION["ulaz"];
    header("location: test.php");
    }
    ?>

</body>
</html>