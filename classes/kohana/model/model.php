<?php

class Kohana_Model_Model extends ORM
{
    protected $_primary_key        = 'model_id';
    protected $_primary_val        = 'model_name';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array
    (
        'manufacturer' => array(),
    );

    protected $_has_many = array
    (
        'assets' => array(),
    );
}
