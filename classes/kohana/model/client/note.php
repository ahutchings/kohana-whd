<?php

class Kohana_Model_Client_Note extends ORM
{
    protected $_primary_key = 'id';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'client' => array(),
    );
}
