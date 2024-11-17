<?php
//fonction pour aller vers une autre page
function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}

function generateOtp() {
    $code= "";

    for($i=0; $i < 5; $i++) {
        $code .= rand(0, 9);
    }

    return (int)$code;
}