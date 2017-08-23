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
        return $this->db->query("SELECT * FROM services");
    }

}

