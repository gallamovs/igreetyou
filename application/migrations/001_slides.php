<?php if (PHP_SAPI !== 'cli') exit('No direct web access allowed');

class Migration_Slides extends CI_Migration {
    public function up(){
        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_field("subdomain varchar(255) NOT NULL UNIQUE");
        $this->dbforge->add_field("enabled int(11) unsigned NOT NULL DEFAULT '1'");
        $this->dbforge->add_field("password varchar(255) NOT NULL DEFAULT ''");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table('greets', TRUE);
    }

    public function down(){
        $this->dbforge->drop_table('greets');
    }
}