<?php

require 'model/Connect.php';

class Lop
{
    private int $ma;
    private string $ho;
    private string $ten;

    public function get_ma()
    {
        return $this->ma;
    }

    public function show_ma()
    {
        return '#' . $this->ma;
    }

    public function set_ma($var)
    {
        $this->ma = $var;
    }

    public function get_ho()
    {
        return $this->ho;
    }

    public function set_ho($var)
    {
        $this->ho = 'Nguyễn ' .$var;
    }

    public function get_ten()
    {
        return $this->ten;
    }

    public function set_ten($var)
    {
        $this->ten = $var;
    }

    public function get_ho_ten()
    {
        return $this->ho . '.' . $this->ten;
    }

    public function all()
    {
        $sql = "select * from lop";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row){
            $object = new self();
            $object->set_ma($row['ma']);
            $object->set_ho($row['ho']);
            $object->set_ten($row['ten']);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($ho, $ten): void
    {
        $object = new self();
        $object->set_ho($ho);
        $object->set_ten($ten);


        $sql = "insert into lop (ho, ten)
                values('{$object->ho}','{$object->ten}')";
        (new Connect())->execute($sql);
    }

    public function find($ma)
    {
        $sql = "select * from lop
        where ma = '$ma'";
        $result = (new Connect())->select($sql);
        $row = mysqli_fetch_array($result);

        $object = new self();
        $object->set_ma($row['ma']);
        $object->set_ho($row['ho']);
        $object->set_ten($row['ten']);

        return $object;
    }

    public function update($ma, $ho, $ten): void
    {
        $object = new self();
        $object->set_ma($ma);
        $object->set_ho($ho);
        $object->set_ten($ten);

        $sql = "update lop set
        ho = '$object->ho',
        ten = '$object->ten'
        where
        ma = '$object->ma'
        ";
        (new Connect())->execute($sql);
    }

    public function destroy($ma): void
    {
        $sql = "delete from lop 
        where
        ma = '$ma'
        ";
        (new Connect())->execute($sql);
    }
}