<?php

$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';

switch ($controller){
    case '';
        require 'controller/root.php';
        break;
    case 'lop':
        require 'controller/lop.php';
        break;
    case 'sinh_vien':
        require 'controller/sinh_vien.php';
        break;
    default:
        echo 'Không tìm thấy controller phù hợp';
        break;
}

