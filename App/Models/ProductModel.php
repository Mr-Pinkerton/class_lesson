<?php

class ProductModel extends Model
{
    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM product";
        $mysqlQuery = mysqli_query($this->mysql, $sql);

        return mysqli_fetch_all($mysqlQuery, MYSQLI_ASSOC);
    }
}