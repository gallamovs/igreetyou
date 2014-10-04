<?php if (PHP_SAPI !== 'cli') exit('No direct web access allowed');

class Migration_Slides extends CI_Migration {
    public function up(){
        $this->dbforge->add_field("greet_id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        //$this->dbforge->add_field("expires TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_field("subdomain varchar(255) NOT NULL UNIQUE");
        $this->dbforge->add_field("enabled int(11) unsigned NOT NULL");
        $this->dbforge->add_field("password varchar(255) NOT NULL UNIQUE DEFAULT ''");

        $this->dbforge->add_key('greet_id', TRUE);

        $this->dbforge->create_table('greets', TRUE);
    }

    public function down(){
        $this->dbforge->drop_table('greets');
    }
}