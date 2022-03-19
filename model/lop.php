<?php

require 'model/Connect.php';
require 'model/LopObject.php';

class Lop
{
    public function all(): array
    {
        $sql    = "select * from lop";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new LopObject($row);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params): void
    {
        $object = new LopObject($params);

        $sql = "insert into lop(ho,ten)
            values('" . $object->get_ho() . "','" . $object->get_ten() . "')";
        (new Connect())->execute($sql);
    }

    public function find($ma): object
    {
        $sql = "select * from lop
            where ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new LopObject($each);
    }

    public function update(array $params): void
    {
        $object = new LopObject($params);

        $sql = "update lop
        set
        ho = '" . $object->get_ho()."',
        ten = '" . $object->get_ten()."'
        where
        ma = '" . $object->get_ma()."'
        ";
        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        $sql = "delete from lop
            where ma = '$ma'";
        (new Connect())->execute($sql);
    }
}