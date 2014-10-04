<?php if (PHP_SAPI !== 'cli') exit('No direct web access allowed');

class Migration_Slides extends CI_Migration {
    public function up(){
        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("ord int(11) unsigned NOT NULL ");
        $this->dbforge->add_field("image varchar(255) NOT NULL");
        $this->dbforge->add_field("content1 varchar(255) NOT NULL DEFAULT ''");
        $this->dbforge->add_field("content2 varchar(255) NOT NULL DEFAULT ''");
        $this->dbforge->add_field("greet_id int(11) unsigned NOT NULL");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table('slides', TRUE);
    }

    public function down(){
        $this->dbforge->drop_table('slides');
    }
}