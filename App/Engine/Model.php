<?php
class Model
{
    protected mysqli|false $mysql;
    public function __construct()
    {
        $server = 'localhost';
        $userName = 'vlados';
        $password = '11332266';
        $DBName = 'for_test';

        $this->mysql = mysqli_connect($server, $userName, $password, $DBName);
    }
}