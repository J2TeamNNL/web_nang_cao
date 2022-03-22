<?php

class SinhVienObject
{
    private $ma;
    private $ten;
    private $ma_lop;
    private $ten_lop;

    public function __construct($row)
    {
        $this->ma     = $row['ma'] ?? '';
        $this->ten    = $row['ten'];
        $this->ma_lop = $row['ma_lop'];
        $this->ten_lop = $row['ten_lop'] ?? '';
    }

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

    public function get_ten()
    {
        return $this->ten;
    }

    public function set_ten($var)
    {
        $this->ten = $var;
    }

    public function get_ma_lop()
    {
        return $this->ma_lop;
    }

    public function set_ma_lop($var)
    {
        $this->ma_lop = $var;
    }

    public function get_ten_lop()
    {
        return $this->ten_lop;
    }
}