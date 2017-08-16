<?php

namespace Data;

class Navigation
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM pages");
    }

    public function getPage($id)
    {
        $result = $this->db->single(
            "SELECT page_controller.`path` FROM pages
				INNER JOIN page_controller ON page_controller.`page_controller_id` = pages.`fk_controller_id`
				WHERE pages.`page_id` = :id",
            [':id' => $id]
        );

        return './includes/' . $result->path . '.php';
    }
}

   /* public function install()
    {
        $sql = "CREATE TABLE IF NOT EXISTS pages (
						page_id int(11) NOT NULL,
						page_name varchar(45) NOT NULL,
						page_default tinyint(4) DEFAULT NULL,
						fk_controller_id int(11) NOT NULL
					) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
					CREATE TABLE IF NOT EXISTS page_controller (
						page_controller_id int(11) NOT NULL,
						path varchar(120) NOT NULL
					) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
					ALTER TABLE pages
						ADD PRIMARY KEY (page_id), ADD KEY fk_pages_page_controller_idx (fk_controller_id);
					ALTER TABLE page_controller
						ADD PRIMARY KEY (page_controller_id);
					ALTER TABLE pages
						MODIFY page_id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
					ALTER TABLE page_controller
						MODIFY page_controller_id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
					ALTER TABLE pages
						ADD CONSTRAINT fk_pages_page_controller FOREIGN KEY (fk_controller_id) REFERENCES page_controller (page_controller_id) ON DELETE NO ACTION ON UPDATE NO ACTION;";

        $this->db->query($sql);
    }

}*/