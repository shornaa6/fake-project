<?php

$superhero = "Superman";

function revealidentity(){
    global $superhero;
    $message = "real name is Clark Kent";
    echo "$superhero $message";
}

revealidentity();


echo "Hi there! What's Up?!";