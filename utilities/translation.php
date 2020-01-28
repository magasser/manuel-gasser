<?php
$lang = 'en';

if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

$fn = $_SERVER['DOCUMENT_ROOT'] . "/languages/{$lang}.txt";
$file = file($fn);

foreach($file as $line) {
    $keyval = explode('=', $line);
    $translation[$keyval[0]] = $keyval[1];

    list($key, $val) = explode('=', $line);
    $translation[$key] = $val;
}

function t($key) {
    global $translation;
    if(isset($translation[$key])) {
        $value = trim($translation[$key]);
        return $value;
    } else {
        return "[{$key}]";
    }
}
