<?php

switch ($action){
    case '':
        require 'model/sinh_vien.php';
        $result = sinh_vien_index();
        require 'view/sinh_vien/index.php';
        break;
    case 'create':
        require 'model/lop.php';
        $lops = lop_index();
        require 'view/sinh_vien/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/sinh_vien.php';
        sinh_vien_store($ten, $ma_lop);
        header('location:index.php?controller=sinh_vien');
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model/sinh_vien.php';
        $each = sinh_vien_edit($ma);
        require 'model/lop.php';
        $lops = lop_index();
        require 'view/sinh_vien/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/sinh_vien.php';
        sinh_vien_update($ma, $ten, $ma_lop);
        header('location:index.php?controller=sinh_vien');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require 'model/sinh_vien.php';
        sinh_vien_delete($ma);
        header('location:index.php?controller=sinh_vien');
        break;
    default:
        echo "Nhập action của lớp sai rồi";
        break;
}

