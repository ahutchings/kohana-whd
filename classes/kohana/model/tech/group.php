<?php

class Kohana_Model_Tech_Group extends ORM
{
    protected $_primary_key = 'id';
    protected $_primary_val = 'name';
    protected $_table_names_plural = FALSE;

    protected $_has_many = array(
        'tech_group_levels' => array()
    );
}
