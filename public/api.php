<?php

$email = $_POST['email'];

if (empty($email)) {
    echo "no input given";
} else {
    validateForm($email);
}

function removeSpaces($email)
{
    $array = array();
    for ($i = 0; $i < strlen($email); $i++) {
        if ($email[$i] === " " || $email[$i] === ";" || $email[$i] === "'" || $email[$i] === '"' || $email[$i] === ":") {
            continue;
        } else {
            $array[$i] = $email[$i];
        }
    }
    $email = implode($array);
    return $email;
}




function validateForm($email){
    $email = trim($email);
    $email = removeSpaces($email);
    echo $email;
}
?>