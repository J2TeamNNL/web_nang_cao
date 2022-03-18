<?php

class Connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'j2school';

    private function cnt()
    {
        $connect = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->cnt();

        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $result;
    }

    public function execute($sql): void
    {
        $connect = $this->cnt();

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }
}