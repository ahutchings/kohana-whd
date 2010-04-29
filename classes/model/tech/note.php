<?php

class Model_Tech_Note extends ORM
{
    protected $_primary_key = 'tech_note_id';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'technician' => array('model' => 'tech'),
    );
}
