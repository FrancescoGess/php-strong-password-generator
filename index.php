<?php 
function genPass ($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\()*+,-./:;<=>?@[\]^_`{|}~';
    $password = '';
    $lengthCharacters = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $lengthCharacters - 1);
        $password .= $characters[$index];
}
    return $password;
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

<form action="index.php" method="GET">
    <label for="length">Lunghezza della Password:</label>
    <input type="number" id="length" name="length" min="4" max="30" required>
    <input type="submit" value="Genera Password">
  </form>
    
</body>
</html>