<?php

class LopObject
{
    private $ma;
    private $ho;
    private $ten;

    public function __construct($row)
    {
        $this->ma = $row['ma'] ?? '';
        $this->ho = $row['ho'];
        $this->ten = $row['ten'];
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
    public function get_ho()
    {
    	return $this->ho;
    }
    public function set_ho($var)
    {
    	$this->ho = $var;
    }

    public function get_ho_ten()
    {
        return $this->ho . '.' . $this->ten;
    }
}