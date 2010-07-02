<?php
class Model_welcome extends Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function Model_welcome()
    {
        // Call the Model constructor for PHP4
        parent::Model();
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('test', 10);
        return $query->result();
    }

    /*function insert_entry()
    {
        $this->title   = $_POST['title']; // 请阅读下方的备注
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/

}
