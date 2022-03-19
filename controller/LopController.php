<?php

class LopController
{
    public function index(): void
    {
        require 'model/Lop.php';
        $arr = (new Lop())->all();

        require 'view/lop/index.php';
    }

    public function create(): void
    {
        require 'view/lop/create.php';
    }

    public function store(): void
    {
        require 'model/Lop.php';
        (new Lop())->create($_POST);
    }

    public function edit(): void
    {
        $ma = $_GET['ma'];
        require 'model/Lop.php';
        $each = (new Lop())->find($ma);

        require 'view/lop/edit.php';
    }

    public function update(): void
    {
        require 'model/Lop.php';
        (new Lop())->update($_POST);
    }

    public function delete(): void
    {
        require 'model/Lop.php';
        (new Lop())->delete($_GET['ma']);
    }
}