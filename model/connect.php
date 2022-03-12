<?php

function connect(){
    $connect = mysqli_connect('localhost','root','','j2school');
    mysqli_set_charset($connect, 'utf8');
    
    return $connect;
}
