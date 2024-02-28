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