<?php 

session_start();

include __DIR__ . '/function.php';

if (isset($_GET['length'])){
    //controllo
    $lengthPassword = (int)$_GET['length'];
    //condizione di caratteri tra 4 e 30
    if ($lengthPassword >= 4 && $lengthPassword <= 30){
        $passGenerata = genPass($lengthPassword);
        echo '<h3> Password Generata: </h3>';
        echo '<p>' . $passGenerata . '</p>';
    } else {
        echo '<p> La lunghezza della password deve essere compresa tra 4 e 30 caratteri. </p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="text-center">
    genera password sicura
</h1>

<form action="index.php" method="GET">
    <label for="length">Lunghezza della Password:</label>
    <input type="number" id="length" name="length" min="4" max="30" required>
    <input class="" type="submit" value="Genera Password">
  </form>
    
</body>
</html>