<?php session_start();
if (!isset($_SESSION["username"])) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=./index.php">';
    exit;
}
require_once "./config/config.php";
