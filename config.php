<?php
define("CONFIG_SITE_TITLE","Mon modèle MVC PHP");
define("CONFIG_ROUTES",[
    "home" => "home",
    "gallery" => "gallery",
    "contact" => "contact"
]);
const DB_HOST = "localhost";
const DB_NAME = "data_test";
const DB_USER = "roman";
const DB_PASS = "azerty";

function connectDB(): PDO{
    $db = new PDO('mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
    return $db;
}