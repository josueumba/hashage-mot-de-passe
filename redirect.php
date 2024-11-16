<?php
//fonction pour aller vers une autre page
function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}