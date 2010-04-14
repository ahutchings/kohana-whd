<?php

class Model_Tech_Group_Level extends ORM
{
    protected $_primary_key = 'id';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'tech_group' => array(),
    );

    protected $_has_many = array(
        'techs' => array('through' => 'tech_group_level_tech')
    );
}
