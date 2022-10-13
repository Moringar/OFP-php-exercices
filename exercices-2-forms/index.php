<!-- Formulaire -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #browserInput{
            visibility: hidden;
            display: none;
        }
    </style>
</head>
<body>



<h3>Exo 1 et 2</h3>
<form method="POST" action="./submit-exo1.php">
    <input class="field" placeholder="Name" type="text" name="name">
    <input class="field" placeholder="Address" type="text" name="address">
    <input class="field" placeholder="City" type="text" name="city">
    <input class="field" placeholder="Zipcode" type="text" name="zipcode">
    <input id="submit" type="submit">
</form>
<hr>




<h3>Exo 2</h3>
<form method="POST" action="./submit-exo3.php">
    <input placeholder="email" class="mailField" type="email" name="email">
    <?php 

        $browserAgent = $_SERVER['HTTP_USER_AGENT'];

        if( strpos($browserAgent, "Mozilla") == true){
            $browser = "chrome";
            "mozilla";
        }
        else if ( strpos($browserAgent, "Chrome") == true){
            $browser = "chrome";
        }
        else{
            $browser = "navigateur inconnu";
        }
    ?>

    <input id="browserInput" type="text" name="browser" value="<?php echo $browser ?>" >

    <input id="submitMail" type="submit">
</form>
<hr>





<h3>Exo 4</h3>
<?php
        if( isset($_GET ["ht"]) && isset($_GET ["tva"])  ){
            $prixHorsTaxe = $_GET ["ht"];
            $tva = $_GET ["tva"];
             echo "TVA : ".$tva."%. Le prix TTC est ".($prixHorsTaxe + ( $prixHorsTaxe * $tva / 100));

        }
        else{
            $tva = "";
            $prixHorsTaxe ="";
            echo "Indiquez le prix et le montant de la tva.";
        }

?>

<form method="GET" action="index.php">
        <input id="PHT" placeholder="Prix hors taxe en €" type="text" name="ht" value="<?php echo $prixHorsTaxe?>">
        <input id="TVA" placeholder="% TVA" type="text" name="tva" value="<?php echo $tva?>">
        <input id="submitPrice" type="submit">
</form>

<p>

</p>
<hr>


<h3>Exo 5</h3>
<form enctype="multipart/form-data" action="./submit-exo5.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input id="fileField" type="file" name="file">
        <input id="sendFile" type="submit">
</form>

<hr>

<h3>Exo 6</h3>
<form action="">
    <input type="submit" value="ACHAT" formaction="./pageachat.php">
    <input type="submit" value="VENTE" formaction="./pagevente.php">
    <input type="submit" value="LOCATION" formaction="./pagelocation.php">
</form>




</body>
<script src="./index.js"></script>
</html>
