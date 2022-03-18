<?php

class LopController
{
    public function index()
    {
        require 'model/Lop.php';
        $arr = (new Lop())->all();
        require 'view/lop/index.php';
    }

    public function create()
    {
        require 'view/lop/create.php';
    }

    public function store()
    {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];

        require 'model/Lop.php';
        (new Lop())->create($ho, $ten);
    }

    public function edit()
    {
        $ma = $_GET['ma'];

        require 'model/Lop.php';
        $each = (new Lop())->find($ma);
        require 'view/lop/edit.php';
    }

    public function update()
    {
        $ma = $_POST['ma'];
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];

        require 'model/Lop.php';
        (new Lop())->update($ma, $ho, $ten);
    }

    public function delete()
    {
        $ma = $_GET['ma'];

        require 'model/Lop.php';
        (new Lop())->destroy($ma);
    }
}