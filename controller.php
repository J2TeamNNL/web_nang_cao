<?php

if(empty($_GET['mon'])){
    include 'menu.php';
} else {
    $mon = $_GET['mon'];
    include 'model.php';
    include 'dia.php';
}