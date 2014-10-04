<?php if (PHP_SAPI !== 'cli') exit('No direct web access allowed');

class Migration_Slides extends CI_Migration {
    public function __construct()
    {
        $this->load->database();
    }

    public function up(){
        $this->db->query('ALTER TABLE slides
                                                        ADD CONSTRAINT fk_GreetSlides
                                                        FOREIGN KEY (greet_id)
                                                        REFERENCES greets(id)');
    }
}