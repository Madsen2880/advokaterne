<?php

namespace Data;

class Services
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getArticles()
    {
        return $this->db->query("SELECT * FROM articles
                                   LEFT JOIN categories ON category_id = articel_id WHERE fk_category_id = 6");
    }

}

