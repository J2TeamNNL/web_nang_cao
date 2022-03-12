<?php

require_once 'model/connect.php';

function lop_index(){
    $connect = connect();
    $sql = "select * from lop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);

    return $result;
}

function lop_store($ten){
    $connect = connect();
    $sql = "insert into lop (ten)
        values ('$ten')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function lop_edit($ma){
    $connect = connect();
    $sql = "select * from lop
        where
            ma = '$ma'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);

    return $each;
}

function lop_update($ma, $ten){
    $connect = connect();
    $sql = "update lop
        set
            ten = '$ten'
        where
            ma = '$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function lop_delete($ma){
    $connect = connect();
    $sql = "delete from lop
        where
            ma = '$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}
