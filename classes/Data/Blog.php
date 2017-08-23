<?php

namespace Data;

class Blog
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getArticles()
    {
        return $this->db->query("SELECT * FROM blogs");
    }

}