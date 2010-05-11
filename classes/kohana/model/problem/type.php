<?php

class Kohana_Model_Problem_Type extends ORM
{
    protected $_primary_key = 'problem_type_id';
    protected $_primary_val = 'problem_type_name';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'group' => array()
    );
}
