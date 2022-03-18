<?php

require 'controller/LopController.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
    case 'create':
    case 'store':
    case 'edit':
    case 'update':
    case 'delete':
        (new LopController())->$action();
        break;
    default:
        echo "Nhập sai action rồi";
        break;
}
