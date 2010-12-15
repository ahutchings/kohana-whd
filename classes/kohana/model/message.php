<?php

class Kohana_Model_Message extends ORM
{
    protected $_primary_key        = 'id';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array
    (
        'tech' => array(),
    );
}
