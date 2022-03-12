<?php

switch ($action){
    case '':
        require 'model/lop.php';
        $result = lop_index();
        require 'view/lop/index.php';
        break;
    case 'create':
        require 'view/lop/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        require 'model/lop.php';
        lop_store($ten);
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model/lop.php';
        $each = lop_edit($ma);
        require 'view/lop/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        require 'model/lop.php';
        lop_update($ma, $ten);
        header('location:index.php?controller=lop');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require 'model/lop.php';
        lop_delete($ma);
        header('location:index.php?controller=lop');
        break;
    default:
        echo "Nhập action của lớp sai rồi";
        break;
}

