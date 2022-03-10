<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch($action){
    case '':
        require 'model.php';
        require 'view/index.php';
        break;
    case 'create':
        require 'view/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        require 'model.php';
        header('location:index.php');
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model.php';
        require 'view/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        require 'model.php';
        header('location:index.php');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require 'model.php';
        header('location:index.php');
        break;
    default:
        echo 'nhập action linh tinh gì thế';
}