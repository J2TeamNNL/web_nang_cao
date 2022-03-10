<?php

$connect = mysqli_connect('localhost','root','','j2school');
mysqli_set_charset($connect,'utf8');

switch($action){
    case '':
        $sql = "select * from sinh_vien";
        $result = mysqli_query($connect,$sql);
        break;
    case 'store':
        $sql = "insert into sinh_vien(ten)
        values ('$ten')";
        mysqli_query($connect,$sql);
        break;
    case 'edit':
        $sql = "select * from sinh_vien
        where ma = '$ma'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sinh_vien 
        set 
        ten = '$ten'
        where ma = '$ma'";
        mysqli_query($connect,$sql);
        break;
    case 'delete':
        $sql = "delete from sinh_vien 
        where ma = '$ma'";
        mysqli_query($connect,$sql);
        break;
}
mysqli_close($connect);