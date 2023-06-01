<?php

namespace Source\Models;

use Source\Core\Connect;

class Plan
{
    public function selectAll ()
    {
        $query = "SELECT * FROM price";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectByCategory (string $category)
    {
        $query = "SELECT price.name, price, abstract
                  FROM prices
                  JOIN categories ON categories.id = price.category_id
                  WHERE categories.name = '{$category}'";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

}