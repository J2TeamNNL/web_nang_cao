<?php

require_once 'model/Connect.php';
require 'model/SinhVienObject.php';

class SinhVien
{
    private string $table = 'sinh_vien';

    public function all(): array
    {
        $sql    = "select 
        t.*,
        lop.ten as ten_lop
        from $this->table as t
        join lop
        on lop.ma = t.ma_lop";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new SinhVienObject($row);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params): void
    {
        $object = new SinhVienObject($params);

        $sql = "insert into $this->table (ten,ma_lop)
            values('" . $object->get_ten() . "','" . $object->get_ma_lop() . "')";
        (new Connect())->execute($sql);
    }

    public function find($ma): object
    {
        $sql = "select * from $this->table
            where ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new SinhVienObject($each);
    }

    public function update(array $params): void
    {
        $object = new SinhVienObject($params);

        $sql = "update $this->table
        set
        ma_lop = '" . $object->get_ma_lop()."',
        ten = '" . $object->get_ten()."'
        where
        ma = '" . $object->get_ma()."'
        ";
        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        $sql = "delete from $this->table
            where ma = '$ma'";
        (new Connect())->execute($sql);
    }
}